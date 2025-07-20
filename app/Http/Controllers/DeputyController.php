<?php

namespace App\Http\Controllers;

use App\Models\Deputy;

class DeputyController extends Controller
{
    public function index()
    {
        $deputies = Deputy::all();
        
        return response([
            'data' => $deputies,      
        ]);
    }

    public function show(int $id)
    {
        try {
            $deputy = Deputy::find($id);

            if (!$deputy) {
                return response([
                    'data' => [],
                ], 404);
            }
            
            return response([
                'data' => $deputy,  
            ]);

        } catch (\Throwable $th) {
            return response([
                'data' => [],
            ], 500);
        }
    }

    public function expenses(int $id)
    {
        try {
            $deputy = Deputy::find($id);

            if (!$deputy) {
                return response([
                    'data' => [],
                ], 404);
            }

            $expenses = $deputy->expenses;
            
            return response([
                'data' => $expenses,    
            ]);

        } catch (\Throwable $th) {
            return response([
                'data' => [],
            ], 500);
        }
    }
}
