<?php

namespace App\Providers;

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
        /Paginator::useBootstrap();

        $this->app->bind('path.public', function() {
			return realpath(base_path().'/var/www/html/public');
			// return realpath(base_path().'/../public_html/roofcalc');
        });
    }
}
