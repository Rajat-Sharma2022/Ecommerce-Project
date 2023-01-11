<?php

namespace Symfony\Config\Pimcore\Admin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'AttributeBagsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SessionConfig 
{
    private $attributeBags;
    private $_usedProperties = [];

    /**
     * @return \Symfony\Config\Pimcore\Admin\Session\AttributeBagsConfig|$this
     */
    public function attributeBags(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['attributeBags'] = true;
            $this->attributeBags[$name] = $value;

            return $this;
        }

        if (!isset($this->attributeBags[$name]) || !$this->attributeBags[$name] instanceof \Symfony\Config\Pimcore\Admin\Session\AttributeBagsConfig) {
            $this->_usedProperties['attributeBags'] = true;
            $this->attributeBags[$name] = new \Symfony\Config\Pimcore\Admin\Session\AttributeBagsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "attributeBags()" has already been initialized. You cannot pass values the second time you call attributeBags().');
        }

        return $this->attributeBags[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('attribute_bags', $value)) {
            $this->_usedProperties['attributeBags'] = true;
            $this->attributeBags = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Pimcore\Admin\Session\AttributeBagsConfig($v) : $v; }, $value['attribute_bags']);
            unset($value['attribute_bags']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['attributeBags'])) {
            $output['attribute_bags'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Pimcore\Admin\Session\AttributeBagsConfig ? $v->toArray() : $v; }, $this->attributeBags);
        }

        return $output;
    }

}
