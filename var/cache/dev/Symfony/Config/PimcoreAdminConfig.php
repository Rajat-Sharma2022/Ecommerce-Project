<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'GdprDataExtractorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'ObjectsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'AssetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'DocumentsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'CsrfProtectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'AdminCspHeaderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'BrandingConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreAdminConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $gdprDataExtractor;
    private $objects;
    private $assets;
    private $documents;
    private $adminLanguages;
    private $csrfProtection;
    private $adminCspHeader;
    private $customAdminPathIdentifier;
    private $customAdminRouteName;
    private $branding;
    private $_usedProperties = [];

    public function gdprDataExtractor(array $value = []): \Symfony\Config\PimcoreAdmin\GdprDataExtractorConfig
    {
        if (null === $this->gdprDataExtractor) {
            $this->_usedProperties['gdprDataExtractor'] = true;
            $this->gdprDataExtractor = new \Symfony\Config\PimcoreAdmin\GdprDataExtractorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gdprDataExtractor()" has already been initialized. You cannot pass values the second time you call gdprDataExtractor().');
        }

        return $this->gdprDataExtractor;
    }

    public function objects(array $value = []): \Symfony\Config\PimcoreAdmin\ObjectsConfig
    {
        if (null === $this->objects) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\PimcoreAdmin\ObjectsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "objects()" has already been initialized. You cannot pass values the second time you call objects().');
        }

        return $this->objects;
    }

    public function assets(array $value = []): \Symfony\Config\PimcoreAdmin\AssetsConfig
    {
        if (null === $this->assets) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\PimcoreAdmin\AssetsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "assets()" has already been initialized. You cannot pass values the second time you call assets().');
        }

        return $this->assets;
    }

    public function documents(array $value = []): \Symfony\Config\PimcoreAdmin\DocumentsConfig
    {
        if (null === $this->documents) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\PimcoreAdmin\DocumentsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "documents()" has already been initialized. You cannot pass values the second time you call documents().');
        }

        return $this->documents;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function adminLanguages($value): self
    {
        $this->_usedProperties['adminLanguages'] = true;
        $this->adminLanguages = $value;

        return $this;
    }

    public function csrfProtection(array $value = []): \Symfony\Config\PimcoreAdmin\CsrfProtectionConfig
    {
        if (null === $this->csrfProtection) {
            $this->_usedProperties['csrfProtection'] = true;
            $this->csrfProtection = new \Symfony\Config\PimcoreAdmin\CsrfProtectionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "csrfProtection()" has already been initialized. You cannot pass values the second time you call csrfProtection().');
        }

        return $this->csrfProtection;
    }

    /**
     * @return \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig|$this
     */
    public function adminCspHeader($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['adminCspHeader'] = true;
            $this->adminCspHeader = $value;

            return $this;
        }

        if (!$this->adminCspHeader instanceof \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig) {
            $this->_usedProperties['adminCspHeader'] = true;
            $this->adminCspHeader = new \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "adminCspHeader()" has already been initialized. You cannot pass values the second time you call adminCspHeader().');
        }

        return $this->adminCspHeader;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customAdminPathIdentifier($value): self
    {
        $this->_usedProperties['customAdminPathIdentifier'] = true;
        $this->customAdminPathIdentifier = $value;

        return $this;
    }

    /**
     * @default 'my_custom_admin_entry_point'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customAdminRouteName($value): self
    {
        $this->_usedProperties['customAdminRouteName'] = true;
        $this->customAdminRouteName = $value;

        return $this;
    }

    public function branding(array $value = []): \Symfony\Config\PimcoreAdmin\BrandingConfig
    {
        if (null === $this->branding) {
            $this->_usedProperties['branding'] = true;
            $this->branding = new \Symfony\Config\PimcoreAdmin\BrandingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "branding()" has already been initialized. You cannot pass values the second time you call branding().');
        }

        return $this->branding;
    }

    public function getExtensionAlias(): string
    {
        return 'pimcore_admin';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('gdpr_data_extractor', $value)) {
            $this->_usedProperties['gdprDataExtractor'] = true;
            $this->gdprDataExtractor = new \Symfony\Config\PimcoreAdmin\GdprDataExtractorConfig($value['gdpr_data_extractor']);
            unset($value['gdpr_data_extractor']);
        }

        if (array_key_exists('objects', $value)) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\PimcoreAdmin\ObjectsConfig($value['objects']);
            unset($value['objects']);
        }

        if (array_key_exists('assets', $value)) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\PimcoreAdmin\AssetsConfig($value['assets']);
            unset($value['assets']);
        }

        if (array_key_exists('documents', $value)) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\PimcoreAdmin\DocumentsConfig($value['documents']);
            unset($value['documents']);
        }

        if (array_key_exists('admin_languages', $value)) {
            $this->_usedProperties['adminLanguages'] = true;
            $this->adminLanguages = $value['admin_languages'];
            unset($value['admin_languages']);
        }

        if (array_key_exists('csrf_protection', $value)) {
            $this->_usedProperties['csrfProtection'] = true;
            $this->csrfProtection = new \Symfony\Config\PimcoreAdmin\CsrfProtectionConfig($value['csrf_protection']);
            unset($value['csrf_protection']);
        }

        if (array_key_exists('admin_csp_header', $value)) {
            $this->_usedProperties['adminCspHeader'] = true;
            $this->adminCspHeader = \is_array($value['admin_csp_header']) ? new \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig($value['admin_csp_header']) : $value['admin_csp_header'];
            unset($value['admin_csp_header']);
        }

        if (array_key_exists('custom_admin_path_identifier', $value)) {
            $this->_usedProperties['customAdminPathIdentifier'] = true;
            $this->customAdminPathIdentifier = $value['custom_admin_path_identifier'];
            unset($value['custom_admin_path_identifier']);
        }

        if (array_key_exists('custom_admin_route_name', $value)) {
            $this->_usedProperties['customAdminRouteName'] = true;
            $this->customAdminRouteName = $value['custom_admin_route_name'];
            unset($value['custom_admin_route_name']);
        }

        if (array_key_exists('branding', $value)) {
            $this->_usedProperties['branding'] = true;
            $this->branding = new \Symfony\Config\PimcoreAdmin\BrandingConfig($value['branding']);
            unset($value['branding']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['gdprDataExtractor'])) {
            $output['gdpr_data_extractor'] = $this->gdprDataExtractor->toArray();
        }
        if (isset($this->_usedProperties['objects'])) {
            $output['objects'] = $this->objects->toArray();
        }
        if (isset($this->_usedProperties['assets'])) {
            $output['assets'] = $this->assets->toArray();
        }
        if (isset($this->_usedProperties['documents'])) {
            $output['documents'] = $this->documents->toArray();
        }
        if (isset($this->_usedProperties['adminLanguages'])) {
            $output['admin_languages'] = $this->adminLanguages;
        }
        if (isset($this->_usedProperties['csrfProtection'])) {
            $output['csrf_protection'] = $this->csrfProtection->toArray();
        }
        if (isset($this->_usedProperties['adminCspHeader'])) {
            $output['admin_csp_header'] = $this->adminCspHeader instanceof \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig ? $this->adminCspHeader->toArray() : $this->adminCspHeader;
        }
        if (isset($this->_usedProperties['customAdminPathIdentifier'])) {
            $output['custom_admin_path_identifier'] = $this->customAdminPathIdentifier;
        }
        if (isset($this->_usedProperties['customAdminRouteName'])) {
            $output['custom_admin_route_name'] = $this->customAdminRouteName;
        }
        if (isset($this->_usedProperties['branding'])) {
            $output['branding'] = $this->branding->toArray();
        }

        return $output;
    }

}
