<?php

namespace App\Providers;

use Illuminate\Support\Facades\Notification;
use NotificationChannels\Apn\ApnChannel;
use NotificationChannels\Apn\ClientFactory;
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
    public function boot()
    {
        Notification::extend('apn', function ($app) {
            return new ApnChannel(
                $app->make(ClientFactory::class),
                $app->make(\Illuminate\Contracts\Events\Dispatcher::class)
            );
        });
    }
}
