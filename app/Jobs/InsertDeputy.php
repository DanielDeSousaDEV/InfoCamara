<?php

namespace App\Jobs;

use App\Models\ApiFetch;
use App\Models\Deputy;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class InsertDeputy implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public int $apiFetchId,
        public array $data
    ){ }

    /**
     * Execute the job.
     */
    public function handle(): void
    {   
        try {
            $deputy = Deputy::create($this->data);

            InsertExpenses::dispatch($deputy->id, $deputy->deputy_identifier);

            ApiFetch::findOrFail($this->apiFetchId)->increment('current');

        } catch (\Throwable $th) {
            Log::error('Erro ao inserir deputado', [
                'fetch_id' => $this->apiFetchId,
                'deputy_id' => $this->data['id'] ?? 'N/A',
                'erro' => $th->getMessage()
            ]);
        }
    }
}
