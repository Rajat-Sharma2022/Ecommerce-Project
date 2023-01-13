<?php

namespace Container8Xx9eCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SSk4JeWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SSk4JeW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SSk4JeW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'twoFactor' => ['services', 'scheb_two_factor.security.google_authenticator', 'getSchebTwoFactor_Security_GoogleAuthenticatorService', true],
        ], [
            'twoFactor' => '?',
        ]);
    }
}
