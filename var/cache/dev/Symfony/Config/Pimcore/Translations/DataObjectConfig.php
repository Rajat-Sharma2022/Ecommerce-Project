<?php

namespace Symfony\Config\Pimcore\Translations;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'TranslationExtractorConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DataObjectConfig 
{
    private $translationExtractor;
    private $_usedProperties = [];

    public function translationExtractor(array $value = []): \Symfony\Config\Pimcore\Translations\DataObject\TranslationExtractorConfig
    {
        if (null === $this->translationExtractor) {
            $this->_usedProperties['translationExtractor'] = true;
            $this->translationExtractor = new \Symfony\Config\Pimcore\Translations\DataObject\TranslationExtractorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translationExtractor()" has already been initialized. You cannot pass values the second time you call translationExtractor().');
        }

        return $this->translationExtractor;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('translation_extractor', $value)) {
            $this->_usedProperties['translationExtractor'] = true;
            $this->translationExtractor = new \Symfony\Config\Pimcore\Translations\DataObject\TranslationExtractorConfig($value['translation_extractor']);
            unset($value['translation_extractor']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['translationExtractor'])) {
            $output['translation_extractor'] = $this->translationExtractor->toArray();
        }

        return $output;
    }

}
