<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\RateCommand::class,
        Commands\CallRates::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('backup:clean')->daily()->at('01:00');
        $schedule->command('backup:run')->daily()->at('01:30');
        $schedule->command('rates:create')->everyMinute();
        // API Calls
        // $schedule->command('rates:update')->dailyAt('00:00');
        // $schedule->command('rates:update')->dailyAt('03:00');
        // $schedule->command('rates:update')->dailyAt('06:00');
        // $schedule->command('rates:update')->dailyAt('09:00');
        // $schedule->command('rates:update')->dailyAt('12:00');
        // $schedule->command('rates:update')->dailyAt('15:00');
        // $schedule->command('rates:update')->dailyAt('18:00');
        // $schedule->command('rates:update')->dailyAt('21:00');
      
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
