<?php
namespace Simplenotezy\Economic;

use Exception;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{


    /**
     * Register the service provider.
     *
     * @throws \Exception
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__.'/../config/economic.php';
        $this->mergeConfigFrom($configPath, 'economic');

    }

    public function boot()
    {
        $configPath = __DIR__.'/../config/economic.php';
        $this->publishes([$configPath => config_path('economic.php')], 'config');
    }

}
