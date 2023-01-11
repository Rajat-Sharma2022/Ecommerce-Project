<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ErrorHandlingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'BundlesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'TranslationsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'MapsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'GeneralConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'MaintenanceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ServicesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ObjectsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'AssetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'DocumentsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'EncryptionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ModelsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'RoutingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'FullPageCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ContextConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'AdminConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'WebProfilerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'SecurityConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'EmailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'NewsletterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'CustomReportConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'TargetingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'SitemapsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'WorkflowsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'HttpclientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ApplicationlogConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'PropertiesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'StaticroutesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'PerspectivesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'CustomViewsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'GlossaryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'RedirectsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'TemplatingEngineConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $errorHandling;
    private $bundles;
    private $flags;
    private $translations;
    private $maps;
    private $general;
    private $maintenance;
    private $services;
    private $objects;
    private $assets;
    private $documents;
    private $encryption;
    private $models;
    private $routing;
    private $fullPageCache;
    private $context;
    private $admin;
    private $webProfiler;
    private $security;
    private $email;
    private $newsletter;
    private $customReport;
    private $targeting;
    private $sitemaps;
    private $workflows;
    private $httpclient;
    private $applicationlog;
    private $properties;
    private $staticroutes;
    private $perspectives;
    private $customViews;
    private $glossary;
    private $redirects;
    private $templatingEngine;
    private $_usedProperties = [];

    public function errorHandling(array $value = []): \Symfony\Config\Pimcore\ErrorHandlingConfig
    {
        if (null === $this->errorHandling) {
            $this->_usedProperties['errorHandling'] = true;
            $this->errorHandling = new \Symfony\Config\Pimcore\ErrorHandlingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "errorHandling()" has already been initialized. You cannot pass values the second time you call errorHandling().');
        }

        return $this->errorHandling;
    }

    public function bundles(array $value = []): \Symfony\Config\Pimcore\BundlesConfig
    {
        if (null === $this->bundles) {
            $this->_usedProperties['bundles'] = true;
            $this->bundles = new \Symfony\Config\Pimcore\BundlesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "bundles()" has already been initialized. You cannot pass values the second time you call bundles().');
        }

        return $this->bundles;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function flags($value): self
    {
        $this->_usedProperties['flags'] = true;
        $this->flags = $value;

        return $this;
    }

    public function translations(array $value = []): \Symfony\Config\Pimcore\TranslationsConfig
    {
        if (null === $this->translations) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\Pimcore\TranslationsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translations()" has already been initialized. You cannot pass values the second time you call translations().');
        }

        return $this->translations;
    }

    public function maps(array $value = []): \Symfony\Config\Pimcore\MapsConfig
    {
        if (null === $this->maps) {
            $this->_usedProperties['maps'] = true;
            $this->maps = new \Symfony\Config\Pimcore\MapsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "maps()" has already been initialized. You cannot pass values the second time you call maps().');
        }

        return $this->maps;
    }

    public function general(array $value = []): \Symfony\Config\Pimcore\GeneralConfig
    {
        if (null === $this->general) {
            $this->_usedProperties['general'] = true;
            $this->general = new \Symfony\Config\Pimcore\GeneralConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "general()" has already been initialized. You cannot pass values the second time you call general().');
        }

        return $this->general;
    }

    public function maintenance(array $value = []): \Symfony\Config\Pimcore\MaintenanceConfig
    {
        if (null === $this->maintenance) {
            $this->_usedProperties['maintenance'] = true;
            $this->maintenance = new \Symfony\Config\Pimcore\MaintenanceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "maintenance()" has already been initialized. You cannot pass values the second time you call maintenance().');
        }

        return $this->maintenance;
    }

    public function services(array $value = []): \Symfony\Config\Pimcore\ServicesConfig
    {
        if (null === $this->services) {
            $this->_usedProperties['services'] = true;
            $this->services = new \Symfony\Config\Pimcore\ServicesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "services()" has already been initialized. You cannot pass values the second time you call services().');
        }

        return $this->services;
    }

    public function objects(array $value = []): \Symfony\Config\Pimcore\ObjectsConfig
    {
        if (null === $this->objects) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\Pimcore\ObjectsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "objects()" has already been initialized. You cannot pass values the second time you call objects().');
        }

        return $this->objects;
    }

    public function assets(array $value = []): \Symfony\Config\Pimcore\AssetsConfig
    {
        if (null === $this->assets) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\Pimcore\AssetsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "assets()" has already been initialized. You cannot pass values the second time you call assets().');
        }

        return $this->assets;
    }

    public function documents(array $value = []): \Symfony\Config\Pimcore\DocumentsConfig
    {
        if (null === $this->documents) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\Pimcore\DocumentsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "documents()" has already been initialized. You cannot pass values the second time you call documents().');
        }

        return $this->documents;
    }

    public function encryption(array $value = []): \Symfony\Config\Pimcore\EncryptionConfig
    {
        if (null === $this->encryption) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\Pimcore\EncryptionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "encryption()" has already been initialized. You cannot pass values the second time you call encryption().');
        }

        return $this->encryption;
    }

    public function models(array $value = []): \Symfony\Config\Pimcore\ModelsConfig
    {
        if (null === $this->models) {
            $this->_usedProperties['models'] = true;
            $this->models = new \Symfony\Config\Pimcore\ModelsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "models()" has already been initialized. You cannot pass values the second time you call models().');
        }

        return $this->models;
    }

    public function routing(array $value = []): \Symfony\Config\Pimcore\RoutingConfig
    {
        if (null === $this->routing) {
            $this->_usedProperties['routing'] = true;
            $this->routing = new \Symfony\Config\Pimcore\RoutingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "routing()" has already been initialized. You cannot pass values the second time you call routing().');
        }

        return $this->routing;
    }

    public function fullPageCache(array $value = []): \Symfony\Config\Pimcore\FullPageCacheConfig
    {
        if (null === $this->fullPageCache) {
            $this->_usedProperties['fullPageCache'] = true;
            $this->fullPageCache = new \Symfony\Config\Pimcore\FullPageCacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fullPageCache()" has already been initialized. You cannot pass values the second time you call fullPageCache().');
        }

        return $this->fullPageCache;
    }

    public function context(string $name, array $value = []): \Symfony\Config\Pimcore\ContextConfig
    {
        if (!isset($this->context[$name])) {
            $this->_usedProperties['context'] = true;
            $this->context[$name] = new \Symfony\Config\Pimcore\ContextConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "context()" has already been initialized. You cannot pass values the second time you call context().');
        }

        return $this->context[$name];
    }

    public function admin(array $value = []): \Symfony\Config\Pimcore\AdminConfig
    {
        if (null === $this->admin) {
            $this->_usedProperties['admin'] = true;
            $this->admin = new \Symfony\Config\Pimcore\AdminConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "admin()" has already been initialized. You cannot pass values the second time you call admin().');
        }

        return $this->admin;
    }

    public function webProfiler(array $value = []): \Symfony\Config\Pimcore\WebProfilerConfig
    {
        if (null === $this->webProfiler) {
            $this->_usedProperties['webProfiler'] = true;
            $this->webProfiler = new \Symfony\Config\Pimcore\WebProfilerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "webProfiler()" has already been initialized. You cannot pass values the second time you call webProfiler().');
        }

        return $this->webProfiler;
    }

    public function security(array $value = []): \Symfony\Config\Pimcore\SecurityConfig
    {
        if (null === $this->security) {
            $this->_usedProperties['security'] = true;
            $this->security = new \Symfony\Config\Pimcore\SecurityConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "security()" has already been initialized. You cannot pass values the second time you call security().');
        }

        return $this->security;
    }

    public function email(array $value = []): \Symfony\Config\Pimcore\EmailConfig
    {
        if (null === $this->email) {
            $this->_usedProperties['email'] = true;
            $this->email = new \Symfony\Config\Pimcore\EmailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "email()" has already been initialized. You cannot pass values the second time you call email().');
        }

        return $this->email;
    }

    public function newsletter(array $value = []): \Symfony\Config\Pimcore\NewsletterConfig
    {
        if (null === $this->newsletter) {
            $this->_usedProperties['newsletter'] = true;
            $this->newsletter = new \Symfony\Config\Pimcore\NewsletterConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "newsletter()" has already been initialized. You cannot pass values the second time you call newsletter().');
        }

        return $this->newsletter;
    }

    public function customReport(array $value = []): \Symfony\Config\Pimcore\CustomReportConfig
    {
        if (null === $this->customReport) {
            $this->_usedProperties['customReport'] = true;
            $this->customReport = new \Symfony\Config\Pimcore\CustomReportConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customReport()" has already been initialized. You cannot pass values the second time you call customReport().');
        }

        return $this->customReport;
    }

    public function targeting(array $value = []): \Symfony\Config\Pimcore\TargetingConfig
    {
        if (null === $this->targeting) {
            $this->_usedProperties['targeting'] = true;
            $this->targeting = new \Symfony\Config\Pimcore\TargetingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "targeting()" has already been initialized. You cannot pass values the second time you call targeting().');
        }

        return $this->targeting;
    }

    public function sitemaps(array $value = []): \Symfony\Config\Pimcore\SitemapsConfig
    {
        if (null === $this->sitemaps) {
            $this->_usedProperties['sitemaps'] = true;
            $this->sitemaps = new \Symfony\Config\Pimcore\SitemapsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sitemaps()" has already been initialized. You cannot pass values the second time you call sitemaps().');
        }

        return $this->sitemaps;
    }

    public function workflows(string $name, array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig
    {
        if (!isset($this->workflows[$name])) {
            $this->_usedProperties['workflows'] = true;
            $this->workflows[$name] = new \Symfony\Config\Pimcore\WorkflowsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "workflows()" has already been initialized. You cannot pass values the second time you call workflows().');
        }

        return $this->workflows[$name];
    }

    public function httpclient(array $value = []): \Symfony\Config\Pimcore\HttpclientConfig
    {
        if (null === $this->httpclient) {
            $this->_usedProperties['httpclient'] = true;
            $this->httpclient = new \Symfony\Config\Pimcore\HttpclientConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "httpclient()" has already been initialized. You cannot pass values the second time you call httpclient().');
        }

        return $this->httpclient;
    }

    public function applicationlog(array $value = []): \Symfony\Config\Pimcore\ApplicationlogConfig
    {
        if (null === $this->applicationlog) {
            $this->_usedProperties['applicationlog'] = true;
            $this->applicationlog = new \Symfony\Config\Pimcore\ApplicationlogConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "applicationlog()" has already been initialized. You cannot pass values the second time you call applicationlog().');
        }

        return $this->applicationlog;
    }

    public function properties(array $value = []): \Symfony\Config\Pimcore\PropertiesConfig
    {
        if (null === $this->properties) {
            $this->_usedProperties['properties'] = true;
            $this->properties = new \Symfony\Config\Pimcore\PropertiesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "properties()" has already been initialized. You cannot pass values the second time you call properties().');
        }

        return $this->properties;
    }

    public function staticroutes(array $value = []): \Symfony\Config\Pimcore\StaticroutesConfig
    {
        if (null === $this->staticroutes) {
            $this->_usedProperties['staticroutes'] = true;
            $this->staticroutes = new \Symfony\Config\Pimcore\StaticroutesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "staticroutes()" has already been initialized. You cannot pass values the second time you call staticroutes().');
        }

        return $this->staticroutes;
    }

    public function perspectives(array $value = []): \Symfony\Config\Pimcore\PerspectivesConfig
    {
        if (null === $this->perspectives) {
            $this->_usedProperties['perspectives'] = true;
            $this->perspectives = new \Symfony\Config\Pimcore\PerspectivesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "perspectives()" has already been initialized. You cannot pass values the second time you call perspectives().');
        }

        return $this->perspectives;
    }

    public function customViews(array $value = []): \Symfony\Config\Pimcore\CustomViewsConfig
    {
        if (null === $this->customViews) {
            $this->_usedProperties['customViews'] = true;
            $this->customViews = new \Symfony\Config\Pimcore\CustomViewsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customViews()" has already been initialized. You cannot pass values the second time you call customViews().');
        }

        return $this->customViews;
    }

    public function glossary(array $value = []): \Symfony\Config\Pimcore\GlossaryConfig
    {
        if (null === $this->glossary) {
            $this->_usedProperties['glossary'] = true;
            $this->glossary = new \Symfony\Config\Pimcore\GlossaryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "glossary()" has already been initialized. You cannot pass values the second time you call glossary().');
        }

        return $this->glossary;
    }

    public function redirects(array $value = []): \Symfony\Config\Pimcore\RedirectsConfig
    {
        if (null === $this->redirects) {
            $this->_usedProperties['redirects'] = true;
            $this->redirects = new \Symfony\Config\Pimcore\RedirectsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "redirects()" has already been initialized. You cannot pass values the second time you call redirects().');
        }

        return $this->redirects;
    }

    public function templatingEngine(array $value = []): \Symfony\Config\Pimcore\TemplatingEngineConfig
    {
        if (null === $this->templatingEngine) {
            $this->_usedProperties['templatingEngine'] = true;
            $this->templatingEngine = new \Symfony\Config\Pimcore\TemplatingEngineConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "templatingEngine()" has already been initialized. You cannot pass values the second time you call templatingEngine().');
        }

        return $this->templatingEngine;
    }

    public function getExtensionAlias(): string
    {
        return 'pimcore';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('error_handling', $value)) {
            $this->_usedProperties['errorHandling'] = true;
            $this->errorHandling = new \Symfony\Config\Pimcore\ErrorHandlingConfig($value['error_handling']);
            unset($value['error_handling']);
        }

        if (array_key_exists('bundles', $value)) {
            $this->_usedProperties['bundles'] = true;
            $this->bundles = new \Symfony\Config\Pimcore\BundlesConfig($value['bundles']);
            unset($value['bundles']);
        }

        if (array_key_exists('flags', $value)) {
            $this->_usedProperties['flags'] = true;
            $this->flags = $value['flags'];
            unset($value['flags']);
        }

        if (array_key_exists('translations', $value)) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\Pimcore\TranslationsConfig($value['translations']);
            unset($value['translations']);
        }

        if (array_key_exists('maps', $value)) {
            $this->_usedProperties['maps'] = true;
            $this->maps = new \Symfony\Config\Pimcore\MapsConfig($value['maps']);
            unset($value['maps']);
        }

        if (array_key_exists('general', $value)) {
            $this->_usedProperties['general'] = true;
            $this->general = new \Symfony\Config\Pimcore\GeneralConfig($value['general']);
            unset($value['general']);
        }

        if (array_key_exists('maintenance', $value)) {
            $this->_usedProperties['maintenance'] = true;
            $this->maintenance = new \Symfony\Config\Pimcore\MaintenanceConfig($value['maintenance']);
            unset($value['maintenance']);
        }

        if (array_key_exists('services', $value)) {
            $this->_usedProperties['services'] = true;
            $this->services = new \Symfony\Config\Pimcore\ServicesConfig($value['services']);
            unset($value['services']);
        }

        if (array_key_exists('objects', $value)) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\Pimcore\ObjectsConfig($value['objects']);
            unset($value['objects']);
        }

        if (array_key_exists('assets', $value)) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\Pimcore\AssetsConfig($value['assets']);
            unset($value['assets']);
        }

        if (array_key_exists('documents', $value)) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\Pimcore\DocumentsConfig($value['documents']);
            unset($value['documents']);
        }

        if (array_key_exists('encryption', $value)) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\Pimcore\EncryptionConfig($value['encryption']);
            unset($value['encryption']);
        }

        if (array_key_exists('models', $value)) {
            $this->_usedProperties['models'] = true;
            $this->models = new \Symfony\Config\Pimcore\ModelsConfig($value['models']);
            unset($value['models']);
        }

        if (array_key_exists('routing', $value)) {
            $this->_usedProperties['routing'] = true;
            $this->routing = new \Symfony\Config\Pimcore\RoutingConfig($value['routing']);
            unset($value['routing']);
        }

        if (array_key_exists('full_page_cache', $value)) {
            $this->_usedProperties['fullPageCache'] = true;
            $this->fullPageCache = new \Symfony\Config\Pimcore\FullPageCacheConfig($value['full_page_cache']);
            unset($value['full_page_cache']);
        }

        if (array_key_exists('context', $value)) {
            $this->_usedProperties['context'] = true;
            $this->context = array_map(function ($v) { return new \Symfony\Config\Pimcore\ContextConfig($v); }, $value['context']);
            unset($value['context']);
        }

        if (array_key_exists('admin', $value)) {
            $this->_usedProperties['admin'] = true;
            $this->admin = new \Symfony\Config\Pimcore\AdminConfig($value['admin']);
            unset($value['admin']);
        }

        if (array_key_exists('web_profiler', $value)) {
            $this->_usedProperties['webProfiler'] = true;
            $this->webProfiler = new \Symfony\Config\Pimcore\WebProfilerConfig($value['web_profiler']);
            unset($value['web_profiler']);
        }

        if (array_key_exists('security', $value)) {
            $this->_usedProperties['security'] = true;
            $this->security = new \Symfony\Config\Pimcore\SecurityConfig($value['security']);
            unset($value['security']);
        }

        if (array_key_exists('email', $value)) {
            $this->_usedProperties['email'] = true;
            $this->email = new \Symfony\Config\Pimcore\EmailConfig($value['email']);
            unset($value['email']);
        }

        if (array_key_exists('newsletter', $value)) {
            $this->_usedProperties['newsletter'] = true;
            $this->newsletter = new \Symfony\Config\Pimcore\NewsletterConfig($value['newsletter']);
            unset($value['newsletter']);
        }

        if (array_key_exists('custom_report', $value)) {
            $this->_usedProperties['customReport'] = true;
            $this->customReport = new \Symfony\Config\Pimcore\CustomReportConfig($value['custom_report']);
            unset($value['custom_report']);
        }

        if (array_key_exists('targeting', $value)) {
            $this->_usedProperties['targeting'] = true;
            $this->targeting = new \Symfony\Config\Pimcore\TargetingConfig($value['targeting']);
            unset($value['targeting']);
        }

        if (array_key_exists('sitemaps', $value)) {
            $this->_usedProperties['sitemaps'] = true;
            $this->sitemaps = new \Symfony\Config\Pimcore\SitemapsConfig($value['sitemaps']);
            unset($value['sitemaps']);
        }

        if (array_key_exists('workflows', $value)) {
            $this->_usedProperties['workflows'] = true;
            $this->workflows = array_map(function ($v) { return new \Symfony\Config\Pimcore\WorkflowsConfig($v); }, $value['workflows']);
            unset($value['workflows']);
        }

        if (array_key_exists('httpclient', $value)) {
            $this->_usedProperties['httpclient'] = true;
            $this->httpclient = new \Symfony\Config\Pimcore\HttpclientConfig($value['httpclient']);
            unset($value['httpclient']);
        }

        if (array_key_exists('applicationlog', $value)) {
            $this->_usedProperties['applicationlog'] = true;
            $this->applicationlog = new \Symfony\Config\Pimcore\ApplicationlogConfig($value['applicationlog']);
            unset($value['applicationlog']);
        }

        if (array_key_exists('properties', $value)) {
            $this->_usedProperties['properties'] = true;
            $this->properties = new \Symfony\Config\Pimcore\PropertiesConfig($value['properties']);
            unset($value['properties']);
        }

        if (array_key_exists('staticroutes', $value)) {
            $this->_usedProperties['staticroutes'] = true;
            $this->staticroutes = new \Symfony\Config\Pimcore\StaticroutesConfig($value['staticroutes']);
            unset($value['staticroutes']);
        }

        if (array_key_exists('perspectives', $value)) {
            $this->_usedProperties['perspectives'] = true;
            $this->perspectives = new \Symfony\Config\Pimcore\PerspectivesConfig($value['perspectives']);
            unset($value['perspectives']);
        }

        if (array_key_exists('custom_views', $value)) {
            $this->_usedProperties['customViews'] = true;
            $this->customViews = new \Symfony\Config\Pimcore\CustomViewsConfig($value['custom_views']);
            unset($value['custom_views']);
        }

        if (array_key_exists('glossary', $value)) {
            $this->_usedProperties['glossary'] = true;
            $this->glossary = new \Symfony\Config\Pimcore\GlossaryConfig($value['glossary']);
            unset($value['glossary']);
        }

        if (array_key_exists('redirects', $value)) {
            $this->_usedProperties['redirects'] = true;
            $this->redirects = new \Symfony\Config\Pimcore\RedirectsConfig($value['redirects']);
            unset($value['redirects']);
        }

        if (array_key_exists('templating_engine', $value)) {
            $this->_usedProperties['templatingEngine'] = true;
            $this->templatingEngine = new \Symfony\Config\Pimcore\TemplatingEngineConfig($value['templating_engine']);
            unset($value['templating_engine']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['errorHandling'])) {
            $output['error_handling'] = $this->errorHandling->toArray();
        }
        if (isset($this->_usedProperties['bundles'])) {
            $output['bundles'] = $this->bundles->toArray();
        }
        if (isset($this->_usedProperties['flags'])) {
            $output['flags'] = $this->flags;
        }
        if (isset($this->_usedProperties['translations'])) {
            $output['translations'] = $this->translations->toArray();
        }
        if (isset($this->_usedProperties['maps'])) {
            $output['maps'] = $this->maps->toArray();
        }
        if (isset($this->_usedProperties['general'])) {
            $output['general'] = $this->general->toArray();
        }
        if (isset($this->_usedProperties['maintenance'])) {
            $output['maintenance'] = $this->maintenance->toArray();
        }
        if (isset($this->_usedProperties['services'])) {
            $output['services'] = $this->services->toArray();
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
        if (isset($this->_usedProperties['encryption'])) {
            $output['encryption'] = $this->encryption->toArray();
        }
        if (isset($this->_usedProperties['models'])) {
            $output['models'] = $this->models->toArray();
        }
        if (isset($this->_usedProperties['routing'])) {
            $output['routing'] = $this->routing->toArray();
        }
        if (isset($this->_usedProperties['fullPageCache'])) {
            $output['full_page_cache'] = $this->fullPageCache->toArray();
        }
        if (isset($this->_usedProperties['context'])) {
            $output['context'] = array_map(function ($v) { return $v->toArray(); }, $this->context);
        }
        if (isset($this->_usedProperties['admin'])) {
            $output['admin'] = $this->admin->toArray();
        }
        if (isset($this->_usedProperties['webProfiler'])) {
            $output['web_profiler'] = $this->webProfiler->toArray();
        }
        if (isset($this->_usedProperties['security'])) {
            $output['security'] = $this->security->toArray();
        }
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email->toArray();
        }
        if (isset($this->_usedProperties['newsletter'])) {
            $output['newsletter'] = $this->newsletter->toArray();
        }
        if (isset($this->_usedProperties['customReport'])) {
            $output['custom_report'] = $this->customReport->toArray();
        }
        if (isset($this->_usedProperties['targeting'])) {
            $output['targeting'] = $this->targeting->toArray();
        }
        if (isset($this->_usedProperties['sitemaps'])) {
            $output['sitemaps'] = $this->sitemaps->toArray();
        }
        if (isset($this->_usedProperties['workflows'])) {
            $output['workflows'] = array_map(function ($v) { return $v->toArray(); }, $this->workflows);
        }
        if (isset($this->_usedProperties['httpclient'])) {
            $output['httpclient'] = $this->httpclient->toArray();
        }
        if (isset($this->_usedProperties['applicationlog'])) {
            $output['applicationlog'] = $this->applicationlog->toArray();
        }
        if (isset($this->_usedProperties['properties'])) {
            $output['properties'] = $this->properties->toArray();
        }
        if (isset($this->_usedProperties['staticroutes'])) {
            $output['staticroutes'] = $this->staticroutes->toArray();
        }
        if (isset($this->_usedProperties['perspectives'])) {
            $output['perspectives'] = $this->perspectives->toArray();
        }
        if (isset($this->_usedProperties['customViews'])) {
            $output['custom_views'] = $this->customViews->toArray();
        }
        if (isset($this->_usedProperties['glossary'])) {
            $output['glossary'] = $this->glossary->toArray();
        }
        if (isset($this->_usedProperties['redirects'])) {
            $output['redirects'] = $this->redirects->toArray();
        }
        if (isset($this->_usedProperties['templatingEngine'])) {
            $output['templating_engine'] = $this->templatingEngine->toArray();
        }

        return $output;
    }

}
