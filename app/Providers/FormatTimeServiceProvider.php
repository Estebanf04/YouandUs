<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormatTimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        require_once \app_path() . '/helpers/FormatTime.php';
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}