<?php

namespace App\Providers;

use App\Services\Quran;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class QuranCloudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Http::macro('quran', function () {
            return Http::baseUrl(config('thrid-party.quran'));
        });
    }

    public function register()
    {
        $this->app->bind('quran', function () {
            return new Quran();
        });
    }
}
