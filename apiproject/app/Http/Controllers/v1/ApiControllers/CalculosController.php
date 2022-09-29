<?php

namespace App\Http\Controllers\v1\ApiControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Calculos;


class CalculosController extends Controller
{
    //Metodo para la realizacion de las sumas
    public function prueba(Request $request){
        return response()->json([
            'respuesta' => ''
        ]);
    }

    //Metodo para la realizacion de las sumas
    public function addition(Request $request){
        $rules = [
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric'
        ];

        $validated = Validator::make($request->all(), $rules);

        if($validated->fails()){
            return [
                 'estado' => false,
                 'errores' => $validated->errors()->all()
            ];
         }else{
            $numero1 = $request->numero1;
            $numero2 =  $request->numero2;

            $response = $numero1 + $numero2;

            return response()->json([
                'success' => true,
                'response' => $response,
            ]);
        }
    }

    //Metodo para la realizacion de las resta
    public function subtraction(Request $request){
        $rules = [
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric'
        ];

        $validated = Validator::make($request->all(), $rules);

        if($validated->fails()){
            return [
                 'estado' => false,
                 'errores' => $validated->errors()->all()
            ];
         }else{
            $numero1 = $request->numero1;
            $numero2 =  $request->numero2;

            $response = $numero1 - $numero2;

            return response()->json([
                'success' => true,
                'response' => $response,
            ]);
        }
    }

    //Metodo para la realizacion de las division
    public function split(Request $request){
        $rules = [
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric'
        ];

        $validated = Validator::make($request->all(), $rules);

        if($validated->fails()){
            return [
                 'estado' => false,
                 'errores' => $validated->errors()->all()
            ];
         }else{
            $numero1 = $request->numero1;
            $numero2 =  $request->numero2;

            $response = $numero1 / $numero2;

            return response()->json([
                'success' => true,
                'response' => $response,
            ]);
        }
    }

    //Metodo para la realizacion de las resta
    public function multiplication(Request $request){
        $rules = [
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric'
        ];

        $validated = Validator::make($request->all(), $rules);

        if($validated->fails()){
            return [
                 'estado' => false,
                 'errores' => $validated->errors()->all()
            ];
         }else{
            $numero1 = $request->numero1;
            $numero2 =  $request->numero2;

            $response = $numero1 * $numero2;

            return response()->json([
                'success' => true,
                'response' => $response,
            ]);
        }
    }
}
