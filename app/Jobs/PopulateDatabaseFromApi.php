<?php

namespace App\Jobs;

use App\Models\ApiFetch;
use App\Models\Deputy;
use App\Models\Expense;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PopulateDatabaseFromApi implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $response = Http::get('https://dadosabertos.camara.leg.br/api/v2/deputados');
            
            if (!$response->successful()) {
                Log::error('erro na chamada da API de deputados');
                return;
            }

            $deputies = $response->json()['dados'];

            $apiFetch = ApiFetch::create([
                'total' => count($deputies),
                'fetched_at' => now()
            ]);

            Deputy::query()->delete();
            Expense::query()->delete();
            
            foreach ($deputies as $deputy) {
                $formatedData = [
                    'deputy_identifier' => $deputy['id'],
                    'name' => $deputy['nome'],
                    'email' => $deputy['email'],
                    'party_acronym' => $deputy['siglaPartido'],
                    'photo' => $deputy['urlFoto'],
                    'state_of_birth' => $deputy['siglaUf'],
                ];

                InsertDeputy::dispatch(
                    $apiFetch->id,  
                    $formatedData
                );
            }

            $apiFetch->is_valid = true;

            $apiFetch->save();

        } catch (\Throwable $th) {
            Log::error('erro na população', [
                'th' => $th->getMessage()
            ]);
        }
    }
}
