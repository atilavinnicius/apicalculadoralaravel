<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index()
    {
        return "Api Calculadora";
    }

    public function somar(Request $request)
    {
        $campoum = $request->campo1;
        $campodois = $request->campo2;
        $resposta =  "O Resultador da soma de " . $campoum . " + " . $campodois  . " é " . ($campoum + $campodois);
        return  $resposta;
    }

    public function subtrair(Request $request)
    {

        $campoum = $request->campo1;
        $campodois = $request->campo2;
        $resposta =  "O Resultador da subtração de " . $campoum . " + " . $campodois  . " é " . ($campoum - $campodois);
        return  $resposta;
    }

    public function multiplicar(Request $request)
    {

        $campoum = $request->campo1;
        $campodois = $request->campo2;
        $resposta =  "O Resultador da multiplicação de " . $campoum . " + " . $campodois  . " é " . ($campoum * $campodois);
        return  $resposta;
    }

    public function dividir(Request $request)
    {

        $campoum = $request->campo1;
        $campodois = $request->campo2;
        $resposta =  "O Resultador da divisão de " . $campoum . " + " . $campodois  . " é " . ($campoum / $campodois);
        return  $resposta;
    }
}
