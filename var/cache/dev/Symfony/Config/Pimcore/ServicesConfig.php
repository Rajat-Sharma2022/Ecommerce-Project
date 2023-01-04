<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'GoogleConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ServicesConfig 
{
    private $google;
    private $_usedProperties = [];

    public function google(array $value = []): \Symfony\Config\Pimcore\Services\GoogleConfig
    {
        if (null === $this->google) {
            $this->_usedProperties['google'] = true;
            $this->google = new \Symfony\Config\Pimcore\Services\GoogleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "google()" has already been initialized. You cannot pass values the second time you call google().');
        }

        return $this->google;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('google', $value)) {
            $this->_usedProperties['google'] = true;
            $this->google = new \Symfony\Config\Pimcore\Services\GoogleConfig($value['google']);
            unset($value['google']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['google'])) {
            $output['google'] = $this->google->toArray();
        }

        return $output;
    }

}
