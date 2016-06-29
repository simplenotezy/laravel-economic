<?php
namespace Simplenotezy\LaravelEconomic;

use Exception;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Http\Response;
use Economic\Client as EconomicClient;

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
    public function __construct(EconomicClient $economicClient){
        $this->economic = $economicClient;
    }

    /**
     * Get the Economic instance
     *
     * @return Economic
     */
    public function getEconomic(){
        return $this->economic;
    }

    public function setToken($token) {
        $this->economic->getConfiguration()->token = $token;

        return $this;
    }

    public function setAppToken($token) {
        $this->economic->getConfiguration()->appToken = $token;

        return $this;
    }
}
