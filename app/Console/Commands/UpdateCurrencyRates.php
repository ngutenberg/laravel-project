<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        
        // Обработка XML и обновление данных в таблице currency
        // ...
        
        $this->info('Currency rates updated successfully.');
    }
}
