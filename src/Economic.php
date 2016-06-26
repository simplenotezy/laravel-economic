<?php
namespace Simplenotezy\LaravelEconomic;

use Exception;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Http\Response;

/**
 * A Laravel wrapper for E-conomic
 *
 * @package laravel-economic
 * @author Mattias Fjellvang
 */
class Economic{

    /** @var Economic  */
    protected $economic;

    /** @var \Illuminate\Contracts\Config\Repository  */
    protected $config;

    /**
     * @param Economic $economic
     * @param \Illuminate\Contracts\Config\Repository $config
     */
    public function __construct(Economic $economic, ConfigRepository $config){
        $this->economic = $economic;
        $this->config = $config;
    }

    /**
     * Get the Economic instance
     *
     * @return Economic
     */
    public function getEconomic(){
        return $this->economic;
    }
}
