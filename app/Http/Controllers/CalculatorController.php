<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function getHome(){
        return view('home');
    }
    public function getResult(Request $request){
        $total=0;
        switch($request->operator){
            case "+": $total = ($request->first + $request->second); break;
            case "-": $total = ($request->first - $request->second); break;
            case "*": $total = ($request->first * $request->second); break;
            case "/": $total = ($request->first / $request->second); break;
        }
        
        return view('resultado',[
            'total' => $total,
            'first' => $request->first,
            'second' => $request->second,
            'operator' => $request->operator
        ]);
    }
}
