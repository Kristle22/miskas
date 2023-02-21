<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebrasController;
use App\Http\Controllers\AtimatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('labas', function () {
    return '<h1>Nu, Labas!</h1>';
});

Route::get('labas/jonas', function () {
    return '<h1>As esu Jonas. Labas!</h1>';
});
 
Route::get('say-hello/{color}', [BebrasController::class, 'hello']);

Route::get('what-result/{num1}/{num2}', [AtimatorController::class, 'deduct']);