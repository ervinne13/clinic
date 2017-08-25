<?php

namespace App\Providers;

use App\ViewComposers\SkarlaViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'layouts.skarla', SkarlaViewComposer::class
        );
    }

}
