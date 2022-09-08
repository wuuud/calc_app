<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($num1, $operator,$num2 )
    {
        switch ($operator) {
        case 'addition':
        $answer = $num1 + $num2;
        break;
        case 'subtraction':
        $answer = $num1 - $num2;
        break;
        case 'multiplication':
        $answer = $num1 * $num2;
        break;
        case 'division':
        $answer = $num1 / $num2;
        break;
        }

        return view('message.calc_app' , ['answer' => $answer]);
    }
} 
