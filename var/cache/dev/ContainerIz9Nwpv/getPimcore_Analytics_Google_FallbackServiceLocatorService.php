<?php

namespace ContainerIz9Nwpv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Analytics_Google_FallbackServiceLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.analytics.google.fallback_service_locator' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['pimcore.analytics.google.fallback_service_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider' => ['privates', 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider', 'getSiteConfigProviderService', true],
            'Pimcore\\Analytics\\Google\\Tracker' => ['privates', 'Pimcore\\Analytics\\Google\\Tracker', 'getTrackerService', false],
        ], [
            'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider' => '?',
            'Pimcore\\Analytics\\Google\\Tracker' => '?',
        ]);
    }
}
