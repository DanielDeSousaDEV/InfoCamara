<?php

namespace App\Http\Controllers;

use App\Jobs\PopulateDatabaseFromApi;
use App\Models\ApiFetch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PopulateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function populate()
    {
        try {
            PopulateDatabaseFromApi::dispatch();
    
            return response([
                'message' => 'Espere alguns minutos para popular o banco'
            ]);
        } catch (\Throwable $th) {
            Log::error('ocorreu um erro ao popular o banco', [
                'erro' => $th->getMessage(),
            ]);

            return response([
                'message' => 'ocorreu um erro ao popular o banco'
            ], 500);
        }

    }

    public function check()
    {
        try {
            $apiFetch = ApiFetch::latest()->first();

            if (!$apiFetch) {
                Log::error('ocorreu um erro ao checar o status da população do banco');

                return response([
                    'message' => 'ocorreu um erro ao checar o status da população do banco'
                ], 404);
            }
    
            return response($apiFetch);
        } catch (\Throwable $th) {
            Log::error('ocorreu um erro ao checar o status da população do banco', [
                'erro' => $th->getMessage(),
            ]);

            return response([
                'message' => 'ocorreu um erro ao checar o status da população do banco'
            ], 500);
        }

    }
}
