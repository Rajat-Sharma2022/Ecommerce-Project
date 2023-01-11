<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'CustomReport'.\DIRECTORY_SEPARATOR.'DefinitionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomReportConfig 
{
    private $definitions;
    private $adapters;
    private $_usedProperties = [];

    public function definitions(array $value = []): \Symfony\Config\Pimcore\CustomReport\DefinitionsConfig
    {
        $this->_usedProperties['definitions'] = true;

        return $this->definitions[] = new \Symfony\Config\Pimcore\CustomReport\DefinitionsConfig($value);
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adapters(string $name, $value): self
    {
        $this->_usedProperties['adapters'] = true;
        $this->adapters[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('definitions', $value)) {
            $this->_usedProperties['definitions'] = true;
            $this->definitions = array_map(function ($v) { return new \Symfony\Config\Pimcore\CustomReport\DefinitionsConfig($v); }, $value['definitions']);
            unset($value['definitions']);
        }

        if (array_key_exists('adapters', $value)) {
            $this->_usedProperties['adapters'] = true;
            $this->adapters = $value['adapters'];
            unset($value['adapters']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['definitions'])) {
            $output['definitions'] = array_map(function ($v) { return $v->toArray(); }, $this->definitions);
        }
        if (isset($this->_usedProperties['adapters'])) {
            $output['adapters'] = $this->adapters;
        }

        return $output;
    }

}
