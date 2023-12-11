<?php

namespace Modules\KrakenImageOptimiser\app\Providers;

use Illuminate\Support\ServiceProvider;

class KrakenImageOptimiserServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'KrakenImageOptimiser';

    protected string $moduleNameLower = 'kraken-image-optimiser';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->registerConfig();
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        // $this->app->singleton('optimiser', function () {
        //     return new \Modules\KrakenImageOptimiser\app\Optimisers\KrakenOptimiser();
        // });
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $this->publishes([module_path($this->moduleName, 'config/config.php') => config_path($this->moduleNameLower.'.php')], 'config');
        $this->mergeConfigFrom(module_path($this->moduleName, 'config/config.php'), $this->moduleNameLower);
    }
}
