<?php

namespace App\Http\Controllers\v1\AppControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class CalculosPHPController extends Controller
{

    //Vista principal del proyecto
    public function index()
    {
        $url = 'http://127.0.0.1:8000/api/prueba';
        $response = Http::get($url);
        $valores = $response->json();
        return view('v1/Calculator/CalculatorPHP', compact('valores'));
    }

    public function calculos(Request $request){
        $request -> validate([
            'numero1' => 'required|numeric|min:1',
            'numero2' => 'required|numeric|min:1',
            'valor' => 'required'
        ]);

        if($request->input('valor') == '+'){
            $url = 'http://127.0.0.1:8000/api/addition';
            $response = Http::post($url, [
                'numero1'=>$request->input('numero1'),
                'numero2'=>$request->input('numero2')
            ]);
            $valores = $response->json();

            return view('v1/Calculator/CalculatorPHP', compact('valores'));

        }else if($request->input('valor') == '-'){
            $url = 'http://127.0.0.1:8000/api/subtraction';
            $response = Http::post($url, [
                'numero1'=>$request->input('numero1'),
                'numero2'=>$request->input('numero2')
            ]);
            $valores = $response->json();

            return view('v1/Calculator/CalculatorPHP', compact('valores'));
        }else if($request->input('valor') == '/'){
            $url = 'http://127.0.0.1:8000/api/split';
            $response = Http::post($url, [
                'numero1'=>$request->input('numero1'),
                'numero2'=>$request->input('numero2')
            ]);
            $valores = $response->json();

            return view('v1/Calculator/CalculatorPHP', compact('valores'));
        }else if($request->input('valor') == '*'){
            $url = 'http://127.0.0.1:8000/api/multiplication';
            $response = Http::post($url, [
                'numero1'=>$request->input('numero1'),
                'numero2'=>$request->input('numero2')
            ]);
            $valores = $response->json();

            return view('v1/Calculator/CalculatorPHP', compact('valores'));
        }
    }
}
