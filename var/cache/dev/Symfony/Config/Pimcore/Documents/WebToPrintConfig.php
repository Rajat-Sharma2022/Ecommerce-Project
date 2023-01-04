<?php

namespace Symfony\Config\Pimcore\Documents;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WebToPrintConfig 
{
    private $pdfCreationPhpMemoryLimit;
    private $defaultControllerPrintPage;
    private $defaultControllerPrintContainer;
    private $enableInDefaultView;
    private $generalTool;
    private $generalDocumentSaveMode;
    private $pdfreactorVersion;
    private $pdfreactorProtocol;
    private $pdfreactorServer;
    private $pdfreactorServerPort;
    private $pdfreactorBaseUrl;
    private $pdfreactorApiKey;
    private $pdfreactorLicence;
    private $pdfreactorEnableLenientHttpsMode;
    private $pdfreactorEnableDebugMode;
    private $wkhtmltopdfBin;
    private $wkhtml2pdfOptions;
    private $wkhtml2pdfHostname;
    private $headlessChromeSettings;
    private $_usedProperties = [];

    /**
     * @default '2048M'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfCreationPhpMemoryLimit($value): self
    {
        $this->_usedProperties['pdfCreationPhpMemoryLimit'] = true;
        $this->pdfCreationPhpMemoryLimit = $value;

        return $this;
    }

    /**
     * @default 'App\\Controller\\Web2printController::defaultAction'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultControllerPrintPage($value): self
    {
        $this->_usedProperties['defaultControllerPrintPage'] = true;
        $this->defaultControllerPrintPage = $value;

        return $this;
    }

    /**
     * @default 'App\\Controller\\Web2printController::containerAction'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultControllerPrintContainer($value): self
    {
        $this->_usedProperties['defaultControllerPrintContainer'] = true;
        $this->defaultControllerPrintContainer = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableInDefaultView($value): self
    {
        $this->_usedProperties['enableInDefaultView'] = true;
        $this->enableInDefaultView = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function generalTool($value): self
    {
        $this->_usedProperties['generalTool'] = true;
        $this->generalTool = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function generalDocumentSaveMode($value): self
    {
        $this->_usedProperties['generalDocumentSaveMode'] = true;
        $this->generalDocumentSaveMode = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfreactorVersion($value): self
    {
        $this->_usedProperties['pdfreactorVersion'] = true;
        $this->pdfreactorVersion = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfreactorProtocol($value): self
    {
        $this->_usedProperties['pdfreactorProtocol'] = true;
        $this->pdfreactorProtocol = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfreactorServer($value): self
    {
        $this->_usedProperties['pdfreactorServer'] = true;
        $this->pdfreactorServer = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfreactorServerPort($value): self
    {
        $this->_usedProperties['pdfreactorServerPort'] = true;
        $this->pdfreactorServerPort = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfreactorBaseUrl($value): self
    {
        $this->_usedProperties['pdfreactorBaseUrl'] = true;
        $this->pdfreactorBaseUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfreactorApiKey($value): self
    {
        $this->_usedProperties['pdfreactorApiKey'] = true;
        $this->pdfreactorApiKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfreactorLicence($value): self
    {
        $this->_usedProperties['pdfreactorLicence'] = true;
        $this->pdfreactorLicence = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function pdfreactorEnableLenientHttpsMode($value): self
    {
        $this->_usedProperties['pdfreactorEnableLenientHttpsMode'] = true;
        $this->pdfreactorEnableLenientHttpsMode = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function pdfreactorEnableDebugMode($value): self
    {
        $this->_usedProperties['pdfreactorEnableDebugMode'] = true;
        $this->pdfreactorEnableDebugMode = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function wkhtmltopdfBin($value): self
    {
        $this->_usedProperties['wkhtmltopdfBin'] = true;
        $this->wkhtmltopdfBin = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function wkhtml2pdfOptions($value): self
    {
        $this->_usedProperties['wkhtml2pdfOptions'] = true;
        $this->wkhtml2pdfOptions = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function wkhtml2pdfHostname($value): self
    {
        $this->_usedProperties['wkhtml2pdfHostname'] = true;
        $this->wkhtml2pdfHostname = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function headlessChromeSettings($value): self
    {
        $this->_usedProperties['headlessChromeSettings'] = true;
        $this->headlessChromeSettings = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('pdf_creation_php_memory_limit', $value)) {
            $this->_usedProperties['pdfCreationPhpMemoryLimit'] = true;
            $this->pdfCreationPhpMemoryLimit = $value['pdf_creation_php_memory_limit'];
            unset($value['pdf_creation_php_memory_limit']);
        }

        if (array_key_exists('default_controller_print_page', $value)) {
            $this->_usedProperties['defaultControllerPrintPage'] = true;
            $this->defaultControllerPrintPage = $value['default_controller_print_page'];
            unset($value['default_controller_print_page']);
        }

        if (array_key_exists('default_controller_print_container', $value)) {
            $this->_usedProperties['defaultControllerPrintContainer'] = true;
            $this->defaultControllerPrintContainer = $value['default_controller_print_container'];
            unset($value['default_controller_print_container']);
        }

        if (array_key_exists('enableInDefaultView', $value)) {
            $this->_usedProperties['enableInDefaultView'] = true;
            $this->enableInDefaultView = $value['enableInDefaultView'];
            unset($value['enableInDefaultView']);
        }

        if (array_key_exists('generalTool', $value)) {
            $this->_usedProperties['generalTool'] = true;
            $this->generalTool = $value['generalTool'];
            unset($value['generalTool']);
        }

        if (array_key_exists('generalDocumentSaveMode', $value)) {
            $this->_usedProperties['generalDocumentSaveMode'] = true;
            $this->generalDocumentSaveMode = $value['generalDocumentSaveMode'];
            unset($value['generalDocumentSaveMode']);
        }

        if (array_key_exists('pdfreactorVersion', $value)) {
            $this->_usedProperties['pdfreactorVersion'] = true;
            $this->pdfreactorVersion = $value['pdfreactorVersion'];
            unset($value['pdfreactorVersion']);
        }

        if (array_key_exists('pdfreactorProtocol', $value)) {
            $this->_usedProperties['pdfreactorProtocol'] = true;
            $this->pdfreactorProtocol = $value['pdfreactorProtocol'];
            unset($value['pdfreactorProtocol']);
        }

        if (array_key_exists('pdfreactorServer', $value)) {
            $this->_usedProperties['pdfreactorServer'] = true;
            $this->pdfreactorServer = $value['pdfreactorServer'];
            unset($value['pdfreactorServer']);
        }

        if (array_key_exists('pdfreactorServerPort', $value)) {
            $this->_usedProperties['pdfreactorServerPort'] = true;
            $this->pdfreactorServerPort = $value['pdfreactorServerPort'];
            unset($value['pdfreactorServerPort']);
        }

        if (array_key_exists('pdfreactorBaseUrl', $value)) {
            $this->_usedProperties['pdfreactorBaseUrl'] = true;
            $this->pdfreactorBaseUrl = $value['pdfreactorBaseUrl'];
            unset($value['pdfreactorBaseUrl']);
        }

        if (array_key_exists('pdfreactorApiKey', $value)) {
            $this->_usedProperties['pdfreactorApiKey'] = true;
            $this->pdfreactorApiKey = $value['pdfreactorApiKey'];
            unset($value['pdfreactorApiKey']);
        }

        if (array_key_exists('pdfreactorLicence', $value)) {
            $this->_usedProperties['pdfreactorLicence'] = true;
            $this->pdfreactorLicence = $value['pdfreactorLicence'];
            unset($value['pdfreactorLicence']);
        }

        if (array_key_exists('pdfreactorEnableLenientHttpsMode', $value)) {
            $this->_usedProperties['pdfreactorEnableLenientHttpsMode'] = true;
            $this->pdfreactorEnableLenientHttpsMode = $value['pdfreactorEnableLenientHttpsMode'];
            unset($value['pdfreactorEnableLenientHttpsMode']);
        }

        if (array_key_exists('pdfreactorEnableDebugMode', $value)) {
            $this->_usedProperties['pdfreactorEnableDebugMode'] = true;
            $this->pdfreactorEnableDebugMode = $value['pdfreactorEnableDebugMode'];
            unset($value['pdfreactorEnableDebugMode']);
        }

        if (array_key_exists('wkhtmltopdfBin', $value)) {
            $this->_usedProperties['wkhtmltopdfBin'] = true;
            $this->wkhtmltopdfBin = $value['wkhtmltopdfBin'];
            unset($value['wkhtmltopdfBin']);
        }

        if (array_key_exists('wkhtml2pdfOptions', $value)) {
            $this->_usedProperties['wkhtml2pdfOptions'] = true;
            $this->wkhtml2pdfOptions = $value['wkhtml2pdfOptions'];
            unset($value['wkhtml2pdfOptions']);
        }

        if (array_key_exists('wkhtml2pdfHostname', $value)) {
            $this->_usedProperties['wkhtml2pdfHostname'] = true;
            $this->wkhtml2pdfHostname = $value['wkhtml2pdfHostname'];
            unset($value['wkhtml2pdfHostname']);
        }

        if (array_key_exists('headlessChromeSettings', $value)) {
            $this->_usedProperties['headlessChromeSettings'] = true;
            $this->headlessChromeSettings = $value['headlessChromeSettings'];
            unset($value['headlessChromeSettings']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['pdfCreationPhpMemoryLimit'])) {
            $output['pdf_creation_php_memory_limit'] = $this->pdfCreationPhpMemoryLimit;
        }
        if (isset($this->_usedProperties['defaultControllerPrintPage'])) {
            $output['default_controller_print_page'] = $this->defaultControllerPrintPage;
        }
        if (isset($this->_usedProperties['defaultControllerPrintContainer'])) {
            $output['default_controller_print_container'] = $this->defaultControllerPrintContainer;
        }
        if (isset($this->_usedProperties['enableInDefaultView'])) {
            $output['enableInDefaultView'] = $this->enableInDefaultView;
        }
        if (isset($this->_usedProperties['generalTool'])) {
            $output['generalTool'] = $this->generalTool;
        }
        if (isset($this->_usedProperties['generalDocumentSaveMode'])) {
            $output['generalDocumentSaveMode'] = $this->generalDocumentSaveMode;
        }
        if (isset($this->_usedProperties['pdfreactorVersion'])) {
            $output['pdfreactorVersion'] = $this->pdfreactorVersion;
        }
        if (isset($this->_usedProperties['pdfreactorProtocol'])) {
            $output['pdfreactorProtocol'] = $this->pdfreactorProtocol;
        }
        if (isset($this->_usedProperties['pdfreactorServer'])) {
            $output['pdfreactorServer'] = $this->pdfreactorServer;
        }
        if (isset($this->_usedProperties['pdfreactorServerPort'])) {
            $output['pdfreactorServerPort'] = $this->pdfreactorServerPort;
        }
        if (isset($this->_usedProperties['pdfreactorBaseUrl'])) {
            $output['pdfreactorBaseUrl'] = $this->pdfreactorBaseUrl;
        }
        if (isset($this->_usedProperties['pdfreactorApiKey'])) {
            $output['pdfreactorApiKey'] = $this->pdfreactorApiKey;
        }
        if (isset($this->_usedProperties['pdfreactorLicence'])) {
            $output['pdfreactorLicence'] = $this->pdfreactorLicence;
        }
        if (isset($this->_usedProperties['pdfreactorEnableLenientHttpsMode'])) {
            $output['pdfreactorEnableLenientHttpsMode'] = $this->pdfreactorEnableLenientHttpsMode;
        }
        if (isset($this->_usedProperties['pdfreactorEnableDebugMode'])) {
            $output['pdfreactorEnableDebugMode'] = $this->pdfreactorEnableDebugMode;
        }
        if (isset($this->_usedProperties['wkhtmltopdfBin'])) {
            $output['wkhtmltopdfBin'] = $this->wkhtmltopdfBin;
        }
        if (isset($this->_usedProperties['wkhtml2pdfOptions'])) {
            $output['wkhtml2pdfOptions'] = $this->wkhtml2pdfOptions;
        }
        if (isset($this->_usedProperties['wkhtml2pdfHostname'])) {
            $output['wkhtml2pdfHostname'] = $this->wkhtml2pdfHostname;
        }
        if (isset($this->_usedProperties['headlessChromeSettings'])) {
            $output['headlessChromeSettings'] = $this->headlessChromeSettings;
        }

        return $output;
    }

}
