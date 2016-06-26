## e-conomic Wrapper for Laravel 5

A Laravel wrapper based on [xown/economic-soap-php-client](https://github.com/xown/economic-soap-php-client)

## Installation

### Laravel 5.x:

Require this package in your composer.json and update composer. This will download the package and the e-conomic + fontlib libraries also.

    "simplenotezy/laravel-e-conomic": "dev-master"

After updating composer, add the ServiceProvider to the providers array in config/app.php

    Simplenotezy\LaravelEconomic\ServiceProvider::class,

You can optionally use the facade. Add this to your facades:

    'PDF' => Simplenotezy\LaravelEconomic\Facade::class,
  
## Using

Work in progress...
    
### License

This e-conomic Wrapper for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
