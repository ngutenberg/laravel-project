<?php

use Illuminate\Http\Request; //представляет HTTP-запрос
use Illuminate\Support\Facades\Route;//для определения маршрутов
use App\Http\Controllers\CurrencyController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Файл api.php используется для определения маршрутов API,
| которые предназначены для обработки запросов от клиентских приложений или других сервисов. 
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|В этом коде мы определяем два маршрута: /currencies и /currency/{id}.
|Первый маршрут обрабатывается методом index() контроллера CurrencyController,
| а второй маршрут обрабатывается методом show($id).
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user(); //маршрут, который требует аутентификации
});
Route::middleware('auth:api')->group(function () {
    Route::get('/currencies', [CurrencyController::class, 'index']);
    Route::get('/currency/{id}', [CurrencyController::class, 'show']);
});
// jwt install внизу https://jwt-auth.readthedocs.io/en/develop/quick-start/#update-your-user-model
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

