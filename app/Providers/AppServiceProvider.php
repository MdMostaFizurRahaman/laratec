<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('url', function($attribute, $value, $parameters, $validator) {
            $url = $parameters[0];

            if (filter_var($url, FILTER_VALIDATE_URL)) {
                return true;
            }
        });

        Validator::replacer('url', function($message, $attribute, $rule, $parameters) {
            return str_replace(':field', Str::title(str_replace('_', ' ', $attribute)), ':field shold be valid URL.');
        });
    }
}
