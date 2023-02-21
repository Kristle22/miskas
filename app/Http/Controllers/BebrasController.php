<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebrasController extends Controller
{
    public function hello($color) {
        // dd($color);
        return view('bebrai.bebras', ['colorFromBlade' => $color]);
    }
}
