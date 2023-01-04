<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'StaticConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RoutingConfig 
{
    private $allowProcessingUnpublishedFallbackDocument;
    private $directRouteDocumentTypes;
    private $static;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated The "allow_processing_unpublished_fallback_document" option is deprecated since Pimcore 10.1, it will be removed in Pimcore 11.
     * @return $this
     */
    public function allowProcessingUnpublishedFallbackDocument($value): self
    {
        $this->_usedProperties['allowProcessingUnpublishedFallbackDocument'] = true;
        $this->allowProcessingUnpublishedFallbackDocument = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function directRouteDocumentTypes($value): self
    {
        $this->_usedProperties['directRouteDocumentTypes'] = true;
        $this->directRouteDocumentTypes = $value;

        return $this;
    }

    public function static(array $value = []): \Symfony\Config\Pimcore\Routing\StaticConfig
    {
        if (null === $this->static) {
            $this->_usedProperties['static'] = true;
            $this->static = new \Symfony\Config\Pimcore\Routing\StaticConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "static()" has already been initialized. You cannot pass values the second time you call static().');
        }

        return $this->static;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allow_processing_unpublished_fallback_document', $value)) {
            $this->_usedProperties['allowProcessingUnpublishedFallbackDocument'] = true;
            $this->allowProcessingUnpublishedFallbackDocument = $value['allow_processing_unpublished_fallback_document'];
            unset($value['allow_processing_unpublished_fallback_document']);
        }

        if (array_key_exists('direct_route_document_types', $value)) {
            $this->_usedProperties['directRouteDocumentTypes'] = true;
            $this->directRouteDocumentTypes = $value['direct_route_document_types'];
            unset($value['direct_route_document_types']);
        }

        if (array_key_exists('static', $value)) {
            $this->_usedProperties['static'] = true;
            $this->static = new \Symfony\Config\Pimcore\Routing\StaticConfig($value['static']);
            unset($value['static']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowProcessingUnpublishedFallbackDocument'])) {
            $output['allow_processing_unpublished_fallback_document'] = $this->allowProcessingUnpublishedFallbackDocument;
        }
        if (isset($this->_usedProperties['directRouteDocumentTypes'])) {
            $output['direct_route_document_types'] = $this->directRouteDocumentTypes;
        }
        if (isset($this->_usedProperties['static'])) {
            $output['static'] = $this->static->toArray();
        }

        return $output;
    }

}
