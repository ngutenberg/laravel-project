<?php

use Illuminate\Support\Facades\Route;
use App\Models\Currency;
use Illuminate\Support\Facades\View;
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
    return view('welcome');
});
Route::get('/currencies', function () {
    $currencies = Currency::all();

    return View::make('currencies')->with('currencies', $currencies);
});