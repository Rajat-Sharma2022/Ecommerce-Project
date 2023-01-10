<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RedirectsConfig 
{
    private $statusCodes;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function statusCodes($value): self
    {
        $this->_usedProperties['statusCodes'] = true;
        $this->statusCodes = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('status_codes', $value)) {
            $this->_usedProperties['statusCodes'] = true;
            $this->statusCodes = $value['status_codes'];
            unset($value['status_codes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['statusCodes'])) {
            $output['status_codes'] = $this->statusCodes;
        }

        return $output;
    }

}
