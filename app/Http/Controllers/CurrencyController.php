<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::paginate(10);

        return response()->json($currencies);
    }

    public function show($id)
    {
        $currency = Currency::findOrFail($id);

        return response()->json($currency);
    }
}
