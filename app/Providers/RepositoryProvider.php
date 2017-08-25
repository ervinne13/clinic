<?php

namespace App\Providers;

use App\Modules\System\NumberSeries\Repository\NumberSeriesRepository;
use App\Modules\System\NumberSeries\Repository\NumberSeriesRepositoryDefaultImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NumberSeriesRepository::class, NumberSeriesRepositoryDefaultImpl::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            NumberSeriesRepository::class
        ];
    }

}
