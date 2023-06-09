<?php

use Illuminate\Support\Facades\Route;
use App\Models\Currency;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CurrencyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Файл web.php используется для определения маршрутов, которые предназначены для обработки веб-запросов,
|то есть запросов, которые поступают от пользователей через браузер. 
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
Route::get('/currency/{id}', [CurrencyController::class, 'show']);