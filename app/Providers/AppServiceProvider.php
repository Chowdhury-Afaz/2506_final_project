<?php

namespace App\Providers;

use App\Models\Cart;
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
        Paginator::useBootstrapFive();

        // Cart Data Fetch
        view()->composer('layouts.frontendLayout', function ($view) {
            $cartQty =Cart::select('qty')->sum('qty');
            
            $view->with('cartQty', $cartQty);
        });

    }
}
