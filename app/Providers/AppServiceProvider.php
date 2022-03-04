<?php

namespace App\Providers;

use App\Models\Feedback;
use App\Models\Suggestion;
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
        view()->composer('*', function ($view) {
            $view->with('nav_admin_feedbacks', Feedback::latest()->take(6)->get()); //Where recent is static method which comes from your Post model
        });

        view()->composer('*', function ($view) {
            $view->with('nav_admin_feedbacks_count', Feedback::latest()->get()); //Where recent is static method which comes from your Post model
        });

         view()->composer('*', function ($view) {
            $view->with('nav_admin_ss', Suggestion::latest()->take(6)->get()); //Where recent is static method which comes from your Post model
        });

        view()->composer('*', function ($view) {
            $view->with('nav_admin_ss_count', Suggestion::latest()->get()); //Where recent is static method which comes from your Post model
        });
    }
}
