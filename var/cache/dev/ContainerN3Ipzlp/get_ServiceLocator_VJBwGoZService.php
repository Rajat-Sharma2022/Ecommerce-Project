<?php

namespace ContainerN3Ipzlp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VJBwGoZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vJBwGoZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vJBwGoZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'localeService' => ['services', 'Pimcore\\Localization\\LocaleServiceInterface', 'getLocaleServiceInterfaceService', false],
        ], [
            'localeService' => 'Pimcore\\Localization\\LocaleServiceInterface',
        ]);
    }
}
