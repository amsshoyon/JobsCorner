<?php

namespace App\Providers;
use View;
use App\Job;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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

        View::composer('*', function($view){
            $view->with('alljobs', Job::get());
            $view->with('companies', User::where('user_type', 'company')->get());
        });
    }
}
