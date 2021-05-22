<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getResult(Request $request){
        $total = ($request->first + $request->second);
        view('resultado',[
            'total' => $total,
            'first' => $request->first,
            'second' => $request->second,
            'operator' => $request->operator
        ]);
    }
}
