<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule; // предоставляет удобный способ определения расписания для выполнения команд.
use Illuminate\Foundation\Console\Kernel as ConsoleKernel; //является базовым классом для ядра консоли
use App\Console\Commands\UpdateCurrencyRates; // чтобы мы могли зарегистрировать эту команду.
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly(); используется для определения расписания выполнения команд
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void //спользуется для регистрации команд в приложении.
    {
        $this->load(__DIR__.'/Commands'); //загружает команды из директории app/Console/Commands, чтобы они были доступны в приложении.
        $this->registerCommand(new UpdateCurrencyRates()); // Этот код регистрирует команду UpdateCurrencyRates в приложении.
        require base_path('routes/console.php'); // Этот код подключает файл routes/console.php, который содержит дополнительные маршруты консольных команд,
    }
}
