<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtimatorController extends Controller
{
    public function deduct($num1, $num2) {
        $res = $num1 - $num2;
        return "<h1 style='color: crimson; padding: 20px; font-size: 50px;'>$res</h1>";
    }
}
