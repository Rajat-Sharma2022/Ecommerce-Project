<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Newsletter'.\DIRECTORY_SEPARATOR.'SenderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Newsletter'.\DIRECTORY_SEPARATOR.'ReturnConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Newsletter'.\DIRECTORY_SEPARATOR.'DebugConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class NewsletterConfig 
{
    private $sender;
    private $return;
    private $method;
    private $debug;
    private $useSpecific;
    private $sourceAdapters;
    private $_usedProperties = [];

    public function sender(array $value = []): \Symfony\Config\Pimcore\Newsletter\SenderConfig
    {
        if (null === $this->sender) {
            $this->_usedProperties['sender'] = true;
            $this->sender = new \Symfony\Config\Pimcore\Newsletter\SenderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sender()" has already been initialized. You cannot pass values the second time you call sender().');
        }

        return $this->sender;
    }

    public function return(array $value = []): \Symfony\Config\Pimcore\Newsletter\ReturnConfig
    {
        if (null === $this->return) {
            $this->_usedProperties['return'] = true;
            $this->return = new \Symfony\Config\Pimcore\Newsletter\ReturnConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "return()" has already been initialized. You cannot pass values the second time you call return().');
        }

        return $this->return;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function method($value): self
    {
        $this->_usedProperties['method'] = true;
        $this->method = $value;

        return $this;
    }

    public function debug(array $value = []): \Symfony\Config\Pimcore\Newsletter\DebugConfig
    {
        if (null === $this->debug) {
            $this->_usedProperties['debug'] = true;
            $this->debug = new \Symfony\Config\Pimcore\Newsletter\DebugConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "debug()" has already been initialized. You cannot pass values the second time you call debug().');
        }

        return $this->debug;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useSpecific($value): self
    {
        $this->_usedProperties['useSpecific'] = true;
        $this->useSpecific = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sourceAdapters(string $name, $value): self
    {
        $this->_usedProperties['sourceAdapters'] = true;
        $this->sourceAdapters[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('sender', $value)) {
            $this->_usedProperties['sender'] = true;
            $this->sender = new \Symfony\Config\Pimcore\Newsletter\SenderConfig($value['sender']);
            unset($value['sender']);
        }

        if (array_key_exists('return', $value)) {
            $this->_usedProperties['return'] = true;
            $this->return = new \Symfony\Config\Pimcore\Newsletter\ReturnConfig($value['return']);
            unset($value['return']);
        }

        if (array_key_exists('method', $value)) {
            $this->_usedProperties['method'] = true;
            $this->method = $value['method'];
            unset($value['method']);
        }

        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = new \Symfony\Config\Pimcore\Newsletter\DebugConfig($value['debug']);
            unset($value['debug']);
        }

        if (array_key_exists('use_specific', $value)) {
            $this->_usedProperties['useSpecific'] = true;
            $this->useSpecific = $value['use_specific'];
            unset($value['use_specific']);
        }

        if (array_key_exists('source_adapters', $value)) {
            $this->_usedProperties['sourceAdapters'] = true;
            $this->sourceAdapters = $value['source_adapters'];
            unset($value['source_adapters']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['sender'])) {
            $output['sender'] = $this->sender->toArray();
        }
        if (isset($this->_usedProperties['return'])) {
            $output['return'] = $this->return->toArray();
        }
        if (isset($this->_usedProperties['method'])) {
            $output['method'] = $this->method;
        }
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug->toArray();
        }
        if (isset($this->_usedProperties['useSpecific'])) {
            $output['use_specific'] = $this->useSpecific;
        }
        if (isset($this->_usedProperties['sourceAdapters'])) {
            $output['source_adapters'] = $this->sourceAdapters;
        }

        return $output;
    }

}
