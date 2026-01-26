<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // isi dengan data publik untuk footer
        View::share([
            'email' => "DausPhotography@gmail.com",
            'telp' => "087887300377",
        ]);
    }
}
