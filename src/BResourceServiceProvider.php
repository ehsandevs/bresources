<?php

namespace Ehsandevs\BResources;

use Ehsandevs\BResources\Console\MakeBRequestCommand;
use Ehsandevs\BResources\Console\MakeBResourceCommand;
use Illuminate\Support\ServiceProvider;

class BResourceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeBResourceCommand::class,
            MakeBRequestCommand::class
        ]);
    }

    public function boot()
    {
        //
    }
}
