<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebrasController;
use App\Http\Controllers\AtimatorController;
use App\Http\Controllers\UztvankaController;

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

// Keliu testavimai
Route::get('labas', function () {
    return '<h1>Nu, Labas!</h1>';
});
Route::get('labas/jonas', function () {
    return '<h1>As esu Jonas. Labas!</h1>';
});
Route::get('say-hello/{color}', [BebrasController::class, 'hello']);

Route::get('what-result/{num1}/{num2}', [AtimatorController::class, 'deduct']);
// testavimai baigti

Route::get('uztvanka', [UztvankaController::class, 'index'])->name('uztvanka-index');

Route::get('uztvanka/create', [UztvankaController::class, 'create'])->name('uztvanka-create');
Route::post('uztvanka/store', [UztvankaController::class, 'store'])->name('uztvanka-store');

Route::get('uztvanka/edit/{uztvanka}', [UztvankaController::class, 'edit'])->name('uztvanka-edit');
Route::post('uztvanka/update/{uztvanka}', [UztvankaController::class, 'update'])->name('uztvanka-save');

Route::post('uztvanka/delete/{uztvanka}', [UztvankaController::class, 'destroy'])->name('uztvanka-delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
