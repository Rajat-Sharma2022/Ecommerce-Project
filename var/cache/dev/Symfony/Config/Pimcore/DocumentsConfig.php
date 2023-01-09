<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'DocTypesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'VersionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'ErrorPagesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'EditablesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'AreasConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'NewsletterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'WebToPrintConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'StaticPageRouterConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class DocumentsConfig 
{
    private $docTypes;
    private $versions;
    private $defaultController;
    private $errorPages;
    private $allowTrailingSlash;
    private $generatePreview;
    private $previewUrlPrefix;
    private $treePagingLimit;
    private $editables;
    private $types;
    private $validTables;
    private $areas;
    private $newsletter;
    private $webToPrint;
    private $autoSaveInterval;
    private $staticPageRouter;
    private $_usedProperties = [];
    private $_extraKeys;

    public function docTypes(array $value = []): \Symfony\Config\Pimcore\Documents\DocTypesConfig
    {
        if (null === $this->docTypes) {
            $this->_usedProperties['docTypes'] = true;
            $this->docTypes = new \Symfony\Config\Pimcore\Documents\DocTypesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "docTypes()" has already been initialized. You cannot pass values the second time you call docTypes().');
        }

        return $this->docTypes;
    }

    public function versions(array $value = []): \Symfony\Config\Pimcore\Documents\VersionsConfig
    {
        if (null === $this->versions) {
            $this->_usedProperties['versions'] = true;
            $this->versions = new \Symfony\Config\Pimcore\Documents\VersionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "versions()" has already been initialized. You cannot pass values the second time you call versions().');
        }

        return $this->versions;
    }

    /**
     * @default 'App\\Controller\\DefaultController::defaultAction'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultController($value): self
    {
        $this->_usedProperties['defaultController'] = true;
        $this->defaultController = $value;

        return $this;
    }

    public function errorPages(array $value = []): \Symfony\Config\Pimcore\Documents\ErrorPagesConfig
    {
        if (null === $this->errorPages) {
            $this->_usedProperties['errorPages'] = true;
            $this->errorPages = new \Symfony\Config\Pimcore\Documents\ErrorPagesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "errorPages()" has already been initialized. You cannot pass values the second time you call errorPages().');
        }

        return $this->errorPages;
    }

    /**
     * @default 'no'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function allowTrailingSlash($value): self
    {
        $this->_usedProperties['allowTrailingSlash'] = true;
        $this->allowTrailingSlash = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function generatePreview($value): self
    {
        $this->_usedProperties['generatePreview'] = true;
        $this->generatePreview = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function previewUrlPrefix($value): self
    {
        $this->_usedProperties['previewUrlPrefix'] = true;
        $this->previewUrlPrefix = $value;

        return $this;
    }

    /**
     * @default 50
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function treePagingLimit($value): self
    {
        $this->_usedProperties['treePagingLimit'] = true;
        $this->treePagingLimit = $value;

        return $this;
    }

    public function editables(array $value = []): \Symfony\Config\Pimcore\Documents\EditablesConfig
    {
        if (null === $this->editables) {
            $this->_usedProperties['editables'] = true;
            $this->editables = new \Symfony\Config\Pimcore\Documents\EditablesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "editables()" has already been initialized. You cannot pass values the second time you call editables().');
        }

        return $this->editables;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function types($value): self
    {
        $this->_usedProperties['types'] = true;
        $this->types = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function validTables($value): self
    {
        $this->_usedProperties['validTables'] = true;
        $this->validTables = $value;

        return $this;
    }

    public function areas(array $value = []): \Symfony\Config\Pimcore\Documents\AreasConfig
    {
        if (null === $this->areas) {
            $this->_usedProperties['areas'] = true;
            $this->areas = new \Symfony\Config\Pimcore\Documents\AreasConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "areas()" has already been initialized. You cannot pass values the second time you call areas().');
        }

        return $this->areas;
    }

    public function newsletter(array $value = []): \Symfony\Config\Pimcore\Documents\NewsletterConfig
    {
        if (null === $this->newsletter) {
            $this->_usedProperties['newsletter'] = true;
            $this->newsletter = new \Symfony\Config\Pimcore\Documents\NewsletterConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "newsletter()" has already been initialized. You cannot pass values the second time you call newsletter().');
        }

        return $this->newsletter;
    }

    public function webToPrint(array $value = []): \Symfony\Config\Pimcore\Documents\WebToPrintConfig
    {
        if (null === $this->webToPrint) {
            $this->_usedProperties['webToPrint'] = true;
            $this->webToPrint = new \Symfony\Config\Pimcore\Documents\WebToPrintConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "webToPrint()" has already been initialized. You cannot pass values the second time you call webToPrint().');
        }

        return $this->webToPrint;
    }

    /**
     * @default 60
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function autoSaveInterval($value): self
    {
        $this->_usedProperties['autoSaveInterval'] = true;
        $this->autoSaveInterval = $value;

        return $this;
    }

    public function staticPageRouter(array $value = []): \Symfony\Config\Pimcore\Documents\StaticPageRouterConfig
    {
        if (null === $this->staticPageRouter) {
            $this->_usedProperties['staticPageRouter'] = true;
            $this->staticPageRouter = new \Symfony\Config\Pimcore\Documents\StaticPageRouterConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "staticPageRouter()" has already been initialized. You cannot pass values the second time you call staticPageRouter().');
        }

        return $this->staticPageRouter;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('doc_types', $value)) {
            $this->_usedProperties['docTypes'] = true;
            $this->docTypes = new \Symfony\Config\Pimcore\Documents\DocTypesConfig($value['doc_types']);
            unset($value['doc_types']);
        }

        if (array_key_exists('versions', $value)) {
            $this->_usedProperties['versions'] = true;
            $this->versions = new \Symfony\Config\Pimcore\Documents\VersionsConfig($value['versions']);
            unset($value['versions']);
        }

        if (array_key_exists('default_controller', $value)) {
            $this->_usedProperties['defaultController'] = true;
            $this->defaultController = $value['default_controller'];
            unset($value['default_controller']);
        }

        if (array_key_exists('error_pages', $value)) {
            $this->_usedProperties['errorPages'] = true;
            $this->errorPages = new \Symfony\Config\Pimcore\Documents\ErrorPagesConfig($value['error_pages']);
            unset($value['error_pages']);
        }

        if (array_key_exists('allow_trailing_slash', $value)) {
            $this->_usedProperties['allowTrailingSlash'] = true;
            $this->allowTrailingSlash = $value['allow_trailing_slash'];
            unset($value['allow_trailing_slash']);
        }

        if (array_key_exists('generate_preview', $value)) {
            $this->_usedProperties['generatePreview'] = true;
            $this->generatePreview = $value['generate_preview'];
            unset($value['generate_preview']);
        }

        if (array_key_exists('preview_url_prefix', $value)) {
            $this->_usedProperties['previewUrlPrefix'] = true;
            $this->previewUrlPrefix = $value['preview_url_prefix'];
            unset($value['preview_url_prefix']);
        }

        if (array_key_exists('tree_paging_limit', $value)) {
            $this->_usedProperties['treePagingLimit'] = true;
            $this->treePagingLimit = $value['tree_paging_limit'];
            unset($value['tree_paging_limit']);
        }

        if (array_key_exists('editables', $value)) {
            $this->_usedProperties['editables'] = true;
            $this->editables = new \Symfony\Config\Pimcore\Documents\EditablesConfig($value['editables']);
            unset($value['editables']);
        }

        if (array_key_exists('types', $value)) {
            $this->_usedProperties['types'] = true;
            $this->types = $value['types'];
            unset($value['types']);
        }

        if (array_key_exists('valid_tables', $value)) {
            $this->_usedProperties['validTables'] = true;
            $this->validTables = $value['valid_tables'];
            unset($value['valid_tables']);
        }

        if (array_key_exists('areas', $value)) {
            $this->_usedProperties['areas'] = true;
            $this->areas = new \Symfony\Config\Pimcore\Documents\AreasConfig($value['areas']);
            unset($value['areas']);
        }

        if (array_key_exists('newsletter', $value)) {
            $this->_usedProperties['newsletter'] = true;
            $this->newsletter = new \Symfony\Config\Pimcore\Documents\NewsletterConfig($value['newsletter']);
            unset($value['newsletter']);
        }

        if (array_key_exists('web_to_print', $value)) {
            $this->_usedProperties['webToPrint'] = true;
            $this->webToPrint = new \Symfony\Config\Pimcore\Documents\WebToPrintConfig($value['web_to_print']);
            unset($value['web_to_print']);
        }

        if (array_key_exists('auto_save_interval', $value)) {
            $this->_usedProperties['autoSaveInterval'] = true;
            $this->autoSaveInterval = $value['auto_save_interval'];
            unset($value['auto_save_interval']);
        }

        if (array_key_exists('static_page_router', $value)) {
            $this->_usedProperties['staticPageRouter'] = true;
            $this->staticPageRouter = new \Symfony\Config\Pimcore\Documents\StaticPageRouterConfig($value['static_page_router']);
            unset($value['static_page_router']);
        }

        $this->_extraKeys = $value;

    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['docTypes'])) {
            $output['doc_types'] = $this->docTypes->toArray();
        }
        if (isset($this->_usedProperties['versions'])) {
            $output['versions'] = $this->versions->toArray();
        }
        if (isset($this->_usedProperties['defaultController'])) {
            $output['default_controller'] = $this->defaultController;
        }
        if (isset($this->_usedProperties['errorPages'])) {
            $output['error_pages'] = $this->errorPages->toArray();
        }
        if (isset($this->_usedProperties['allowTrailingSlash'])) {
            $output['allow_trailing_slash'] = $this->allowTrailingSlash;
        }
        if (isset($this->_usedProperties['generatePreview'])) {
            $output['generate_preview'] = $this->generatePreview;
        }
        if (isset($this->_usedProperties['previewUrlPrefix'])) {
            $output['preview_url_prefix'] = $this->previewUrlPrefix;
        }
        if (isset($this->_usedProperties['treePagingLimit'])) {
            $output['tree_paging_limit'] = $this->treePagingLimit;
        }
        if (isset($this->_usedProperties['editables'])) {
            $output['editables'] = $this->editables->toArray();
        }
        if (isset($this->_usedProperties['types'])) {
            $output['types'] = $this->types;
        }
        if (isset($this->_usedProperties['validTables'])) {
            $output['valid_tables'] = $this->validTables;
        }
        if (isset($this->_usedProperties['areas'])) {
            $output['areas'] = $this->areas->toArray();
        }
        if (isset($this->_usedProperties['newsletter'])) {
            $output['newsletter'] = $this->newsletter->toArray();
        }
        if (isset($this->_usedProperties['webToPrint'])) {
            $output['web_to_print'] = $this->webToPrint->toArray();
        }
        if (isset($this->_usedProperties['autoSaveInterval'])) {
            $output['auto_save_interval'] = $this->autoSaveInterval;
        }
        if (isset($this->_usedProperties['staticPageRouter'])) {
            $output['static_page_router'] = $this->staticPageRouter->toArray();
        }

        return $output + $this->_extraKeys;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function set(string $key, $value): self
    {
        $this->_extraKeys[$key] = $value;

        return $this;
    }

}
