<?php

namespace Symfony\Config\Pimcore\Translations\DataObject;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TranslationExtractorConfig 
{
    private $attributes;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<array|ParamConfigurator> $value
     * @return $this
     */
    public function attributes($value): self
    {
        $this->_usedProperties['attributes'] = true;
        $this->attributes = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('attributes', $value)) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['attributes'])) {
            $output['attributes'] = $this->attributes;
        }

        return $output;
    }

}
