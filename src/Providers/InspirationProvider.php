<?php

namespace Morrisrobinson\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../assets/' => public_path('vendor/img/'),], 'public');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }
}
