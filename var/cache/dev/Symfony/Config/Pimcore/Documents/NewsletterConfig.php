<?php

namespace Symfony\Config\Pimcore\Documents;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NewsletterConfig 
{
    private $defaultUrlPrefix;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultUrlPrefix($value): self
    {
        $this->_usedProperties['defaultUrlPrefix'] = true;
        $this->defaultUrlPrefix = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('defaultUrlPrefix', $value)) {
            $this->_usedProperties['defaultUrlPrefix'] = true;
            $this->defaultUrlPrefix = $value['defaultUrlPrefix'];
            unset($value['defaultUrlPrefix']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultUrlPrefix'])) {
            $output['defaultUrlPrefix'] = $this->defaultUrlPrefix;
        }

        return $output;
    }

}
