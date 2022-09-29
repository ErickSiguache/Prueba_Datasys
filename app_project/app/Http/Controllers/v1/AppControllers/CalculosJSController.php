<?php

namespace App\Http\Controllers\v1\AppControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class CalculosJSController extends Controller
{
    public function index(){
        return view('v1/Calculator/CalculatorJS');
    }
}



