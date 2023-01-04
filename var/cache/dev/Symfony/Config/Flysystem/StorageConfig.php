<?php

namespace Symfony\Config\Flysystem;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorageConfig 
{
    private $adapter;
    private $options;
    private $visibility;
    private $directoryVisibility;
    private $caseSensitive;
    private $disableAsserts;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adapter($value): self
    {
        $this->_usedProperties['adapter'] = true;
        $this->adapter = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function options($value): self
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function visibility($value): self
    {
        $this->_usedProperties['visibility'] = true;
        $this->visibility = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directoryVisibility($value): self
    {
        $this->_usedProperties['directoryVisibility'] = true;
        $this->directoryVisibility = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function caseSensitive($value): self
    {
        $this->_usedProperties['caseSensitive'] = true;
        $this->caseSensitive = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableAsserts($value): self
    {
        $this->_usedProperties['disableAsserts'] = true;
        $this->disableAsserts = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('adapter', $value)) {
            $this->_usedProperties['adapter'] = true;
            $this->adapter = $value['adapter'];
            unset($value['adapter']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if (array_key_exists('visibility', $value)) {
            $this->_usedProperties['visibility'] = true;
            $this->visibility = $value['visibility'];
            unset($value['visibility']);
        }

        if (array_key_exists('directory_visibility', $value)) {
            $this->_usedProperties['directoryVisibility'] = true;
            $this->directoryVisibility = $value['directory_visibility'];
            unset($value['directory_visibility']);
        }

        if (array_key_exists('case_sensitive', $value)) {
            $this->_usedProperties['caseSensitive'] = true;
            $this->caseSensitive = $value['case_sensitive'];
            unset($value['case_sensitive']);
        }

        if (array_key_exists('disable_asserts', $value)) {
            $this->_usedProperties['disableAsserts'] = true;
            $this->disableAsserts = $value['disable_asserts'];
            unset($value['disable_asserts']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['adapter'])) {
            $output['adapter'] = $this->adapter;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
        if (isset($this->_usedProperties['visibility'])) {
            $output['visibility'] = $this->visibility;
        }
        if (isset($this->_usedProperties['directoryVisibility'])) {
            $output['directory_visibility'] = $this->directoryVisibility;
        }
        if (isset($this->_usedProperties['caseSensitive'])) {
            $output['case_sensitive'] = $this->caseSensitive;
        }
        if (isset($this->_usedProperties['disableAsserts'])) {
            $output['disable_asserts'] = $this->disableAsserts;
        }

        return $output;
    }

}
