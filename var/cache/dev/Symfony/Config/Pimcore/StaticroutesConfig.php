<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Staticroutes'.\DIRECTORY_SEPARATOR.'DefinitionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class StaticroutesConfig 
{
    private $definitions;
    private $_usedProperties = [];
    private $_extraKeys;

    public function definitions(array $value = []): \Symfony\Config\Pimcore\Staticroutes\DefinitionsConfig
    {
        $this->_usedProperties['definitions'] = true;

        return $this->definitions[] = new \Symfony\Config\Pimcore\Staticroutes\DefinitionsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('definitions', $value)) {
            $this->_usedProperties['definitions'] = true;
            $this->definitions = array_map(function ($v) { return new \Symfony\Config\Pimcore\Staticroutes\DefinitionsConfig($v); }, $value['definitions']);
            unset($value['definitions']);
        }

        $this->_extraKeys = $value;

    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['definitions'])) {
            $output['definitions'] = array_map(function ($v) { return $v->toArray(); }, $this->definitions);
        }

        return $output + $this->_extraKeys;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function set(string $key, $value): self
    {
        $this->_extraKeys[$key] = $value;

        return $this;
    }

}
