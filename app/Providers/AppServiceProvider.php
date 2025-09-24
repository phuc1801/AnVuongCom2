<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\ProductSerial;
use App\Observers\OrderObserver;
use App\Observers\ProductSerialObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
