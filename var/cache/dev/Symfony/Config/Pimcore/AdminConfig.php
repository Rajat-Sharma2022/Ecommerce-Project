<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'SessionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'UnauthenticatedRoutesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'TranslationsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class AdminConfig 
{
    private $session;
    private $unauthenticatedRoutes;
    private $translations;
    private $_usedProperties = [];
    private $_extraKeys;

    public function session(array $value = []): \Symfony\Config\Pimcore\Admin\SessionConfig
    {
        if (null === $this->session) {
            $this->_usedProperties['session'] = true;
            $this->session = new \Symfony\Config\Pimcore\Admin\SessionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "session()" has already been initialized. You cannot pass values the second time you call session().');
        }

        return $this->session;
    }

    /**
     * @return \Symfony\Config\Pimcore\Admin\UnauthenticatedRoutesConfig|$this
     */
    public function unauthenticatedRoutes($value = [])
    {
        $this->_usedProperties['unauthenticatedRoutes'] = true;
        if (!\is_array($value)) {
            $this->unauthenticatedRoutes[] = $value;

            return $this;
        }

        return $this->unauthenticatedRoutes[] = new \Symfony\Config\Pimcore\Admin\UnauthenticatedRoutesConfig($value);
    }

    public function translations(array $value = []): \Symfony\Config\Pimcore\Admin\TranslationsConfig
    {
        if (null === $this->translations) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\Pimcore\Admin\TranslationsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translations()" has already been initialized. You cannot pass values the second time you call translations().');
        }

        return $this->translations;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('session', $value)) {
            $this->_usedProperties['session'] = true;
            $this->session = new \Symfony\Config\Pimcore\Admin\SessionConfig($value['session']);
            unset($value['session']);
        }

        if (array_key_exists('unauthenticated_routes', $value)) {
            $this->_usedProperties['unauthenticatedRoutes'] = true;
            $this->unauthenticatedRoutes = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Pimcore\Admin\UnauthenticatedRoutesConfig($v) : $v; }, $value['unauthenticated_routes']);
            unset($value['unauthenticated_routes']);
        }

        if (array_key_exists('translations', $value)) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\Pimcore\Admin\TranslationsConfig($value['translations']);
            unset($value['translations']);
        }

        $this->_extraKeys = $value;

    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['session'])) {
            $output['session'] = $this->session->toArray();
        }
        if (isset($this->_usedProperties['unauthenticatedRoutes'])) {
            $output['unauthenticated_routes'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Pimcore\Admin\UnauthenticatedRoutesConfig ? $v->toArray() : $v; }, $this->unauthenticatedRoutes);
        }
        if (isset($this->_usedProperties['translations'])) {
            $output['translations'] = $this->translations->toArray();
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
