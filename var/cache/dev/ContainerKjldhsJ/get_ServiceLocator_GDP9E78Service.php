<?php

namespace ContainerKjldhsJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GDP9E78Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GDP9E78' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GDP9E78'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'siteConfigProvider' => ['privates', 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider', 'getSiteConfigProviderService', true],
            'translator' => ['services', 'Symfony\\Contracts\\Translation\\TranslatorInterface', 'getTranslatorInterfaceService', false],
        ], [
            'siteConfigProvider' => 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider',
            'translator' => '?',
        ]);
    }
}
