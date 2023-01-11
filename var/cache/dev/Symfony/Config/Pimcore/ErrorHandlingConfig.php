<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ErrorHandlingConfig 
{
    private $renderErrorDocument;
    private $_usedProperties = [];

    /**
     * Render error document in case of an error instead of showing Symfony's error page
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function renderErrorDocument($value): self
    {
        $this->_usedProperties['renderErrorDocument'] = true;
        $this->renderErrorDocument = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('render_error_document', $value)) {
            $this->_usedProperties['renderErrorDocument'] = true;
            $this->renderErrorDocument = $value['render_error_document'];
            unset($value['render_error_document']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['renderErrorDocument'])) {
            $output['render_error_document'] = $this->renderErrorDocument;
        }

        return $output;
    }

}
