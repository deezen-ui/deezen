<?php

namespace DeezenUI\Deezen\Providers;

use DeezenUI\Deezen\Commands\AddComponentCommand;
use Illuminate\Support\ServiceProvider;

class DeezenServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            AddComponentCommand::class,
        ]);
    }

    public function boot()
    {
        //
    }
}
