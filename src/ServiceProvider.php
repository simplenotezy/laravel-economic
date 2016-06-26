<?php
namespace Simplenotezy\LaravelEconomic;

use Exception;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

use Economic\Client as EconomicClient;
use Economic\Api\Configuration as EconomicConfiguration;

class ServiceProvider extends IlluminateServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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

        /**
         * Init economic
         */
            
            $this->app['economic'] = $this->app->share(function ($app) {
                /**
                 * Fetch config
                 * @var [type]
                 */
                
                    $config = $app['config']->get('economic');

                /**
                 * Setup economic
                 * @var EconomicConfiguration
                 */
                
                    $configuration = new EconomicConfiguration();
                    $configuration->token = $config['token'];
                    $configuration->appToken = $config['appToken'];

                /**
                 * Init using config
                 */

                    return new EconomicClient($configuration);
            });

    }

    public function boot()
    {
        $configPath = __DIR__.'/../config/economic.php';
        $this->publishes([$configPath => config_path('economic.php')], 'config');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['economic'];
    }

}
