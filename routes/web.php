<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $dati = config("data");
    return view('home', $dati);
})->name("home");


Route::get('/', [TrainController::class, 'index']);