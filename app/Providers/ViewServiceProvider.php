<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider

{
    public function boot()
    {
        View::composer('components.navbar', function ($view) {
            $view->with([
                'currentLocale' => app()->getLocale(),
                'availableLocales' => config('app.locales', [])
            ]);
        });
    }

    public function register()
    {
        //
    }
}
