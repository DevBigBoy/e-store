<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend(
            'filter',
            function (string $attribute, mixed $value, $params) {
                return ! in_array(strtolower($value), $params);
            },
            'This :attribute is prohibited!'
        );
    }
}