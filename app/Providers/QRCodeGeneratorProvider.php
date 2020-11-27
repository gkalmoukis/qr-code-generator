<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\QRCodeService;

class QRCodeGeneratorProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\QRCodeService', function ($app) {
            return new QRCodeService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
