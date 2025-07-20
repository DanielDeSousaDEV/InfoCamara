<?php

namespace App\Jobs;

use App\Models\Expense;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InsertExpenses implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public int $deputyId,
        public int $deputyIdentifier
    ){ }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $response = Http::get('https://dadosabertos.camara.leg.br/api/v2/deputados/' . $this->deputyIdentifier . '/despesas');

            if (!$response->successful()) {
                Log::error('Erro ao acessar a Api em despesas', [
                    'deputy_id' => $this->deputyId,
                    'deputy_identifier' => $this->deputyIdentifier,
                ]);
                return;
            }

            $expenses = $response->json()['dados'];

            foreach ($expenses as $expense) {
                $formatedData = [
                    'expense_type' => $expense['tipoDespesa'],
                    'document_type' => $expense['tipoDocumento'],
                    'issue_date' => $expense['dataDocumento'],
                    'document_url' => $expense['urlDocumento'],
                    'supplier_name' => $expense['nomeFornecedor'],
                    'deputy_id' => $this->deputyId
                ];

                Expense::create($formatedData);
            }

        } catch (\Throwable $th) {
            Log::error('Erro ao inserir despesas', [
                'deputy_id' => $this->deputyId,
                'deputy_identifier' => $this->deputyIdentifier,
                'erro' => $th->getMessage(),
            ]);
        }
    }
}
