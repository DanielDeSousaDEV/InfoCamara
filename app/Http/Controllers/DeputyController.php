<?php

namespace App\Http\Controllers;

use App\Models\Deputy;

class DeputyController extends Controller
{
    public function index()
    {
        $deputies = Deputy::all();
        
        return response(
            $deputies,    
        );
    }

    public function show(int $id)
    {
        try {
            $deputy = Deputy::find($id);

            if (!$deputy) {
                return response([
                    'message' => 'Não foi possivel encontrar o deputado',
                ], 404);
            }
            
            return response(
                $deputy,    
            );

        } catch (\Throwable $th) {
            return response([
                'message' => 'Ocorreu um erro ao carregar os dados',
            ], 500);
        }
    }

    public function expenses(int $id)
    {
        try {
            $deputy = Deputy::find($id);

            if (!$deputy) {
                return response([
                    'message' => 'Não foi possivel encontrar o deputado',
                ], 404);
            }

            $expenses = $deputy->expenses;
            
            return response(
                $expenses,    
            );

        } catch (\Throwable $th) {
            return response([
                'message' => 'Ocorreu um erro ao carregar os dados',
            ], 500);
        }
    }
}
