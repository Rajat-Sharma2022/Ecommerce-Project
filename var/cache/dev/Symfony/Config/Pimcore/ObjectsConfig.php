<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Objects'.\DIRECTORY_SEPARATOR.'VersionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Objects'.\DIRECTORY_SEPARATOR.'ClassDefinitionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ObjectsConfig 
{
    private $ignoreLocalizedQueryFallback;
    private $treePagingLimit;
    private $autoSaveInterval;
    private $versions;
    private $classDefinitions;
    private $_usedProperties = [];
    private $_extraKeys;

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function ignoreLocalizedQueryFallback($value): self
    {
        $this->_usedProperties['ignoreLocalizedQueryFallback'] = true;
        $this->ignoreLocalizedQueryFallback = $value;

        return $this;
    }

    /**
     * @default 30
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function treePagingLimit($value): self
    {
        $this->_usedProperties['treePagingLimit'] = true;
        $this->treePagingLimit = $value;

        return $this;
    }

    /**
     * @default 60
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function autoSaveInterval($value): self
    {
        $this->_usedProperties['autoSaveInterval'] = true;
        $this->autoSaveInterval = $value;

        return $this;
    }

    public function versions(array $value = []): \Symfony\Config\Pimcore\Objects\VersionsConfig
    {
        if (null === $this->versions) {
            $this->_usedProperties['versions'] = true;
            $this->versions = new \Symfony\Config\Pimcore\Objects\VersionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "versions()" has already been initialized. You cannot pass values the second time you call versions().');
        }

        return $this->versions;
    }

    public function classDefinitions(array $value = []): \Symfony\Config\Pimcore\Objects\ClassDefinitionsConfig
    {
        if (null === $this->classDefinitions) {
            $this->_usedProperties['classDefinitions'] = true;
            $this->classDefinitions = new \Symfony\Config\Pimcore\Objects\ClassDefinitionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classDefinitions()" has already been initialized. You cannot pass values the second time you call classDefinitions().');
        }

        return $this->classDefinitions;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('ignore_localized_query_fallback', $value)) {
            $this->_usedProperties['ignoreLocalizedQueryFallback'] = true;
            $this->ignoreLocalizedQueryFallback = $value['ignore_localized_query_fallback'];
            unset($value['ignore_localized_query_fallback']);
        }

        if (array_key_exists('tree_paging_limit', $value)) {
            $this->_usedProperties['treePagingLimit'] = true;
            $this->treePagingLimit = $value['tree_paging_limit'];
            unset($value['tree_paging_limit']);
        }

        if (array_key_exists('auto_save_interval', $value)) {
            $this->_usedProperties['autoSaveInterval'] = true;
            $this->autoSaveInterval = $value['auto_save_interval'];
            unset($value['auto_save_interval']);
        }

        if (array_key_exists('versions', $value)) {
            $this->_usedProperties['versions'] = true;
            $this->versions = new \Symfony\Config\Pimcore\Objects\VersionsConfig($value['versions']);
            unset($value['versions']);
        }

        if (array_key_exists('class_definitions', $value)) {
            $this->_usedProperties['classDefinitions'] = true;
            $this->classDefinitions = new \Symfony\Config\Pimcore\Objects\ClassDefinitionsConfig($value['class_definitions']);
            unset($value['class_definitions']);
        }

        $this->_extraKeys = $value;

    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['ignoreLocalizedQueryFallback'])) {
            $output['ignore_localized_query_fallback'] = $this->ignoreLocalizedQueryFallback;
        }
        if (isset($this->_usedProperties['treePagingLimit'])) {
            $output['tree_paging_limit'] = $this->treePagingLimit;
        }
        if (isset($this->_usedProperties['autoSaveInterval'])) {
            $output['auto_save_interval'] = $this->autoSaveInterval;
        }
        if (isset($this->_usedProperties['versions'])) {
            $output['versions'] = $this->versions->toArray();
        }
        if (isset($this->_usedProperties['classDefinitions'])) {
            $output['class_definitions'] = $this->classDefinitions->toArray();
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
