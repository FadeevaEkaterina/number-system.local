<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Загрузка сервисов приложения ..
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('nine_digit_number_system', function ($attribute, $value, $parameters, $validatior) {
            if (preg_match('/^[0-8]+$/', $value)) {
                return true;
            } else {
                return false;
            }
        });
    }
}
