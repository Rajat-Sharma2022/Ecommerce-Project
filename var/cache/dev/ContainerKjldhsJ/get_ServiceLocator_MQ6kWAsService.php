<?php

namespace ContainerKjldhsJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MQ6kWAsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MQ6kWAs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MQ6kWAs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gridHelperService' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\Helper\\GridHelperService', 'getGridHelperServiceService', true],
        ], [
            'gridHelperService' => 'Pimcore\\Bundle\\AdminBundle\\Helper\\GridHelperService',
        ]);
    }
}
