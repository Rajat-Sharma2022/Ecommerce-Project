<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GlossaryConfig 
{
    private $blockedTags;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function blockedTags(string $name, $value): self
    {
        $this->_usedProperties['blockedTags'] = true;
        $this->blockedTags[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('blocked_tags', $value)) {
            $this->_usedProperties['blockedTags'] = true;
            $this->blockedTags = $value['blocked_tags'];
            unset($value['blocked_tags']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['blockedTags'])) {
            $output['blocked_tags'] = $this->blockedTags;
        }

        return $output;
    }

}
