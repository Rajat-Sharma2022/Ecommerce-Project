<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'EncoderFactoriesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'PasswordHasherFactoriesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SecurityConfig 
{
    private $factoryType;
    private $encoderFactories;
    private $passwordHasherFactories;
    private $_usedProperties = [];

    /**
     * @default 'encoder'
     * @param ParamConfigurator|'encoder'|'password_hasher' $value
     * @return $this
     */
    public function factoryType($value): self
    {
        $this->_usedProperties['factoryType'] = true;
        $this->factoryType = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\Pimcore\Security\EncoderFactoriesConfig|$this
     */
    public function encoderFactories(string $class, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['encoderFactories'] = true;
            $this->encoderFactories[$class] = $value;

            return $this;
        }

        if (!isset($this->encoderFactories[$class]) || !$this->encoderFactories[$class] instanceof \Symfony\Config\Pimcore\Security\EncoderFactoriesConfig) {
            $this->_usedProperties['encoderFactories'] = true;
            $this->encoderFactories[$class] = new \Symfony\Config\Pimcore\Security\EncoderFactoriesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "encoderFactories()" has already been initialized. You cannot pass values the second time you call encoderFactories().');
        }

        return $this->encoderFactories[$class];
    }

    /**
     * @return \Symfony\Config\Pimcore\Security\PasswordHasherFactoriesConfig|$this
     */
    public function passwordHasherFactories(string $class, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['passwordHasherFactories'] = true;
            $this->passwordHasherFactories[$class] = $value;

            return $this;
        }

        if (!isset($this->passwordHasherFactories[$class]) || !$this->passwordHasherFactories[$class] instanceof \Symfony\Config\Pimcore\Security\PasswordHasherFactoriesConfig) {
            $this->_usedProperties['passwordHasherFactories'] = true;
            $this->passwordHasherFactories[$class] = new \Symfony\Config\Pimcore\Security\PasswordHasherFactoriesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "passwordHasherFactories()" has already been initialized. You cannot pass values the second time you call passwordHasherFactories().');
        }

        return $this->passwordHasherFactories[$class];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('factory_type', $value)) {
            $this->_usedProperties['factoryType'] = true;
            $this->factoryType = $value['factory_type'];
            unset($value['factory_type']);
        }

        if (array_key_exists('encoder_factories', $value)) {
            $this->_usedProperties['encoderFactories'] = true;
            $this->encoderFactories = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Pimcore\Security\EncoderFactoriesConfig($v) : $v; }, $value['encoder_factories']);
            unset($value['encoder_factories']);
        }

        if (array_key_exists('password_hasher_factories', $value)) {
            $this->_usedProperties['passwordHasherFactories'] = true;
            $this->passwordHasherFactories = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Pimcore\Security\PasswordHasherFactoriesConfig($v) : $v; }, $value['password_hasher_factories']);
            unset($value['password_hasher_factories']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['factoryType'])) {
            $output['factory_type'] = $this->factoryType;
        }
        if (isset($this->_usedProperties['encoderFactories'])) {
            $output['encoder_factories'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Pimcore\Security\EncoderFactoriesConfig ? $v->toArray() : $v; }, $this->encoderFactories);
        }
        if (isset($this->_usedProperties['passwordHasherFactories'])) {
            $output['password_hasher_factories'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Pimcore\Security\PasswordHasherFactoriesConfig ? $v->toArray() : $v; }, $this->passwordHasherFactories);
        }

        return $output;
    }

}
