<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Targeting'.\DIRECTORY_SEPARATOR.'SessionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TargetingConfig 
{
    private $enabled;
    private $storageId;
    private $session;
    private $dataProviders;
    private $conditions;
    private $actionHandlers;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Service ID of the targeting storage which should be used. This ID will be aliased to Pimcore\Targeting\Storage\TargetingStorageInterface
     * @default 'Pimcore\\Targeting\\Storage\\CookieStorage'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function storageId($value): self
    {
        $this->_usedProperties['storageId'] = true;
        $this->storageId = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\Pimcore\Targeting\SessionConfig|$this
     */
    public function session($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['session'] = true;
            $this->session = $value;

            return $this;
        }

        if (!$this->session instanceof \Symfony\Config\Pimcore\Targeting\SessionConfig) {
            $this->_usedProperties['session'] = true;
            $this->session = new \Symfony\Config\Pimcore\Targeting\SessionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "session()" has already been initialized. You cannot pass values the second time you call session().');
        }

        return $this->session;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dataProviders(string $key, $value): self
    {
        $this->_usedProperties['dataProviders'] = true;
        $this->dataProviders[$key] = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function conditions(string $key, $value): self
    {
        $this->_usedProperties['conditions'] = true;
        $this->conditions[$key] = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function actionHandlers(string $name, $value): self
    {
        $this->_usedProperties['actionHandlers'] = true;
        $this->actionHandlers[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('storage_id', $value)) {
            $this->_usedProperties['storageId'] = true;
            $this->storageId = $value['storage_id'];
            unset($value['storage_id']);
        }

        if (array_key_exists('session', $value)) {
            $this->_usedProperties['session'] = true;
            $this->session = \is_array($value['session']) ? new \Symfony\Config\Pimcore\Targeting\SessionConfig($value['session']) : $value['session'];
            unset($value['session']);
        }

        if (array_key_exists('data_providers', $value)) {
            $this->_usedProperties['dataProviders'] = true;
            $this->dataProviders = $value['data_providers'];
            unset($value['data_providers']);
        }

        if (array_key_exists('conditions', $value)) {
            $this->_usedProperties['conditions'] = true;
            $this->conditions = $value['conditions'];
            unset($value['conditions']);
        }

        if (array_key_exists('action_handlers', $value)) {
            $this->_usedProperties['actionHandlers'] = true;
            $this->actionHandlers = $value['action_handlers'];
            unset($value['action_handlers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['storageId'])) {
            $output['storage_id'] = $this->storageId;
        }
        if (isset($this->_usedProperties['session'])) {
            $output['session'] = $this->session instanceof \Symfony\Config\Pimcore\Targeting\SessionConfig ? $this->session->toArray() : $this->session;
        }
        if (isset($this->_usedProperties['dataProviders'])) {
            $output['data_providers'] = $this->dataProviders;
        }
        if (isset($this->_usedProperties['conditions'])) {
            $output['conditions'] = $this->conditions;
        }
        if (isset($this->_usedProperties['actionHandlers'])) {
            $output['action_handlers'] = $this->actionHandlers;
        }

        return $output;
    }

}
