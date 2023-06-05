<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::paginate(10); //извлекает список валют из базы данных

        return response()->json($currencies); //возвращает JSON-ответ с полученными данными
    }

    public function show($id)
    {
        $currency = Currency::findOrFail($id);

        return response()->json($currency);
    }
}
