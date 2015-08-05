<?php

namespace LaravelLangRu;

use Illuminate\Support\ServiceProvider;

class LaravelLangServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__.'../resources/lang' => base_path('resources/lang')]);
    }
}
