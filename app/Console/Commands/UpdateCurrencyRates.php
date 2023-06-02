<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Currency;

class UpdateCurrencyRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-currency-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = 'http://www.cbr.ru/scripts/XML_daily.asp';
    $data = file_get_contents($url);
    $xml = simplexml_load_string($data);
    
    $currencies = $xml->Valute;
    
    foreach ($currencies as $currency) {
        $name = (string) $currency->Name;
        $rate = (float) str_replace(',', '.', $currency->Value);
        
        // Проверяем, существует ли запись в таблице для данной валюты
        $existingCurrency = Currency::where('name', $name)->first();
        
        if ($existingCurrency) {
            // Обновляем курс валюты
            $existingCurrency->rate = $rate;
            $existingCurrency->save();
        } else {
            // Создаем новую запись в таблице
            Currency::create([
                'name' => $name,
                'rate' => $rate,
            ]);
        }
    }
    
    $this->info('Currency rates updated successfully.');
    }
}
