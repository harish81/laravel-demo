<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Inertia::share('flash',function () {
            return [
                'success' => Session::get('success'),
                'errors' => Session::has('errors')?'There are error while submit your data.':null
            ];
        });

        //use with laracast flash
        Inertia::share('flash_notification', function (){
            return Session::get('flash_notification',[]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
