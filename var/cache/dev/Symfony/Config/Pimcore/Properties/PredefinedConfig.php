<?php

namespace Symfony\Config\Pimcore\Properties;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Predefined'.\DIRECTORY_SEPARATOR.'DefinitionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PredefinedConfig 
{
    private $definitions;
    private $_usedProperties = [];

    public function definitions(array $value = []): \Symfony\Config\Pimcore\Properties\Predefined\DefinitionsConfig
    {
        $this->_usedProperties['definitions'] = true;

        return $this->definitions[] = new \Symfony\Config\Pimcore\Properties\Predefined\DefinitionsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('definitions', $value)) {
            $this->_usedProperties['definitions'] = true;
            $this->definitions = array_map(function ($v) { return new \Symfony\Config\Pimcore\Properties\Predefined\DefinitionsConfig($v); }, $value['definitions']);
            unset($value['definitions']);
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

        return $output;
    }

}
