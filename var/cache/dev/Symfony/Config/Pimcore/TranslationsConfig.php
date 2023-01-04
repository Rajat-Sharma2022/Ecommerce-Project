<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Translations'.\DIRECTORY_SEPARATOR.'DebuggingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Translations'.\DIRECTORY_SEPARATOR.'DataObjectConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TranslationsConfig 
{
    private $adminTranslationMapping;
    private $debugging;
    private $dataObject;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminTranslationMapping(string $locale, $value): self
    {
        $this->_usedProperties['adminTranslationMapping'] = true;
        $this->adminTranslationMapping[$locale] = $value;

        return $this;
    }

    public function debugging(array $value = []): \Symfony\Config\Pimcore\Translations\DebuggingConfig
    {
        if (null === $this->debugging) {
            $this->_usedProperties['debugging'] = true;
            $this->debugging = new \Symfony\Config\Pimcore\Translations\DebuggingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "debugging()" has already been initialized. You cannot pass values the second time you call debugging().');
        }

        return $this->debugging;
    }

    public function dataObject(array $value = []): \Symfony\Config\Pimcore\Translations\DataObjectConfig
    {
        if (null === $this->dataObject) {
            $this->_usedProperties['dataObject'] = true;
            $this->dataObject = new \Symfony\Config\Pimcore\Translations\DataObjectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dataObject()" has already been initialized. You cannot pass values the second time you call dataObject().');
        }

        return $this->dataObject;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('admin_translation_mapping', $value)) {
            $this->_usedProperties['adminTranslationMapping'] = true;
            $this->adminTranslationMapping = $value['admin_translation_mapping'];
            unset($value['admin_translation_mapping']);
        }

        if (array_key_exists('debugging', $value)) {
            $this->_usedProperties['debugging'] = true;
            $this->debugging = new \Symfony\Config\Pimcore\Translations\DebuggingConfig($value['debugging']);
            unset($value['debugging']);
        }

        if (array_key_exists('data_object', $value)) {
            $this->_usedProperties['dataObject'] = true;
            $this->dataObject = new \Symfony\Config\Pimcore\Translations\DataObjectConfig($value['data_object']);
            unset($value['data_object']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['adminTranslationMapping'])) {
            $output['admin_translation_mapping'] = $this->adminTranslationMapping;
        }
        if (isset($this->_usedProperties['debugging'])) {
            $output['debugging'] = $this->debugging->toArray();
        }
        if (isset($this->_usedProperties['dataObject'])) {
            $output['data_object'] = $this->dataObject->toArray();
        }

        return $output;
    }

}
