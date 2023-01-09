<?php

namespace Symfony\Config\Pimcore\Services;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GoogleConfig 
{
    private $clientId;
    private $email;
    private $simpleApiKey;
    private $browserApiKey;
    private $_usedProperties = [];

    /**
     * This is required for the Google API integrations. Only use a `Service Account´ from the Google Cloud Console.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientId($value): self
    {
        $this->_usedProperties['clientId'] = true;
        $this->clientId = $value;

        return $this;
    }

    /**
     * Email address of the Google service account
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function email($value): self
    {
        $this->_usedProperties['email'] = true;
        $this->email = $value;

        return $this;
    }

    /**
     * Server API key
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function simpleApiKey($value): self
    {
        $this->_usedProperties['simpleApiKey'] = true;
        $this->simpleApiKey = $value;

        return $this;
    }

    /**
     * Browser API key
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function browserApiKey($value): self
    {
        $this->_usedProperties['browserApiKey'] = true;
        $this->browserApiKey = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('client_id', $value)) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = $value['client_id'];
            unset($value['client_id']);
        }

        if (array_key_exists('email', $value)) {
            $this->_usedProperties['email'] = true;
            $this->email = $value['email'];
            unset($value['email']);
        }

        if (array_key_exists('simple_api_key', $value)) {
            $this->_usedProperties['simpleApiKey'] = true;
            $this->simpleApiKey = $value['simple_api_key'];
            unset($value['simple_api_key']);
        }

        if (array_key_exists('browser_api_key', $value)) {
            $this->_usedProperties['browserApiKey'] = true;
            $this->browserApiKey = $value['browser_api_key'];
            unset($value['browser_api_key']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['clientId'])) {
            $output['client_id'] = $this->clientId;
        }
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email;
        }
        if (isset($this->_usedProperties['simpleApiKey'])) {
            $output['simple_api_key'] = $this->simpleApiKey;
        }
        if (isset($this->_usedProperties['browserApiKey'])) {
            $output['browser_api_key'] = $this->browserApiKey;
        }

        return $output;
    }

}
