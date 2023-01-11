<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GeneralConfig 
{
    private $timezone;
    private $pathVariable;
    private $domain;
    private $redirectToMaindomain;
    private $language;
    private $validLanguages;
    private $fallbackLanguages;
    private $defaultLanguage;
    private $disableUsageStatistics;
    private $debugAdminTranslations;
    private $instanceIdentifier;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timezone($value): self
    {
        $this->_usedProperties['timezone'] = true;
        $this->timezone = $value;

        return $this;
    }

    /**
     * Additional $PATH variable (: separated) (/x/y:/foo/bar):
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathVariable($value): self
    {
        $this->_usedProperties['pathVariable'] = true;
        $this->pathVariable = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function domain($value): self
    {
        $this->_usedProperties['domain'] = true;
        $this->domain = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function redirectToMaindomain($value): self
    {
        $this->_usedProperties['redirectToMaindomain'] = true;
        $this->redirectToMaindomain = $value;

        return $this;
    }

    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function language($value): self
    {
        $this->_usedProperties['language'] = true;
        $this->language = $value;

        return $this;
    }

    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function validLanguages($value): self
    {
        $this->_usedProperties['validLanguages'] = true;
        $this->validLanguages = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function fallbackLanguages($value): self
    {
        $this->_usedProperties['fallbackLanguages'] = true;
        $this->fallbackLanguages = $value;

        return $this;
    }

    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultLanguage($value): self
    {
        $this->_usedProperties['defaultLanguage'] = true;
        $this->defaultLanguage = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableUsageStatistics($value): self
    {
        $this->_usedProperties['disableUsageStatistics'] = true;
        $this->disableUsageStatistics = $value;

        return $this;
    }

    /**
     * Debug Admin-Translations (displayed wrapped in +)
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debugAdminTranslations($value): self
    {
        $this->_usedProperties['debugAdminTranslations'] = true;
        $this->debugAdminTranslations = $value;

        return $this;
    }

    /**
     * UUID instance identifier. Has to be unique throughout multiple Pimcore instances. UUID generation will be automatically enabled if a Instance identifier is provided (do not change the instance identifier afterwards - this will cause invalid UUIDs)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function instanceIdentifier($value): self
    {
        $this->_usedProperties['instanceIdentifier'] = true;
        $this->instanceIdentifier = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('timezone', $value)) {
            $this->_usedProperties['timezone'] = true;
            $this->timezone = $value['timezone'];
            unset($value['timezone']);
        }

        if (array_key_exists('path_variable', $value)) {
            $this->_usedProperties['pathVariable'] = true;
            $this->pathVariable = $value['path_variable'];
            unset($value['path_variable']);
        }

        if (array_key_exists('domain', $value)) {
            $this->_usedProperties['domain'] = true;
            $this->domain = $value['domain'];
            unset($value['domain']);
        }

        if (array_key_exists('redirect_to_maindomain', $value)) {
            $this->_usedProperties['redirectToMaindomain'] = true;
            $this->redirectToMaindomain = $value['redirect_to_maindomain'];
            unset($value['redirect_to_maindomain']);
        }

        if (array_key_exists('language', $value)) {
            $this->_usedProperties['language'] = true;
            $this->language = $value['language'];
            unset($value['language']);
        }

        if (array_key_exists('valid_languages', $value)) {
            $this->_usedProperties['validLanguages'] = true;
            $this->validLanguages = $value['valid_languages'];
            unset($value['valid_languages']);
        }

        if (array_key_exists('fallback_languages', $value)) {
            $this->_usedProperties['fallbackLanguages'] = true;
            $this->fallbackLanguages = $value['fallback_languages'];
            unset($value['fallback_languages']);
        }

        if (array_key_exists('default_language', $value)) {
            $this->_usedProperties['defaultLanguage'] = true;
            $this->defaultLanguage = $value['default_language'];
            unset($value['default_language']);
        }

        if (array_key_exists('disable_usage_statistics', $value)) {
            $this->_usedProperties['disableUsageStatistics'] = true;
            $this->disableUsageStatistics = $value['disable_usage_statistics'];
            unset($value['disable_usage_statistics']);
        }

        if (array_key_exists('debug_admin_translations', $value)) {
            $this->_usedProperties['debugAdminTranslations'] = true;
            $this->debugAdminTranslations = $value['debug_admin_translations'];
            unset($value['debug_admin_translations']);
        }

        if (array_key_exists('instance_identifier', $value)) {
            $this->_usedProperties['instanceIdentifier'] = true;
            $this->instanceIdentifier = $value['instance_identifier'];
            unset($value['instance_identifier']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['timezone'])) {
            $output['timezone'] = $this->timezone;
        }
        if (isset($this->_usedProperties['pathVariable'])) {
            $output['path_variable'] = $this->pathVariable;
        }
        if (isset($this->_usedProperties['domain'])) {
            $output['domain'] = $this->domain;
        }
        if (isset($this->_usedProperties['redirectToMaindomain'])) {
            $output['redirect_to_maindomain'] = $this->redirectToMaindomain;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language;
        }
        if (isset($this->_usedProperties['validLanguages'])) {
            $output['valid_languages'] = $this->validLanguages;
        }
        if (isset($this->_usedProperties['fallbackLanguages'])) {
            $output['fallback_languages'] = $this->fallbackLanguages;
        }
        if (isset($this->_usedProperties['defaultLanguage'])) {
            $output['default_language'] = $this->defaultLanguage;
        }
        if (isset($this->_usedProperties['disableUsageStatistics'])) {
            $output['disable_usage_statistics'] = $this->disableUsageStatistics;
        }
        if (isset($this->_usedProperties['debugAdminTranslations'])) {
            $output['debug_admin_translations'] = $this->debugAdminTranslations;
        }
        if (isset($this->_usedProperties['instanceIdentifier'])) {
            $output['instance_identifier'] = $this->instanceIdentifier;
        }

        return $output;
    }

}
