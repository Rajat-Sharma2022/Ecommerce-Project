<?php

namespace Container834codi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_AuthenticationRequiredHandler_TwoFactor_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.authentication_required_handler.two_factor.pimcore_admin' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\Authentication\DefaultAuthenticationRequiredHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Authentication/AuthenticationRequiredHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Authentication/DefaultAuthenticationRequiredHandler.php';

        return $container->privates['security.authentication.authentication_required_handler.two_factor.pimcore_admin'] = new \Scheb\TwoFactorBundle\Security\Http\Authentication\DefaultAuthenticationRequiredHandler(($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService()), ($container->privates['security.firewall_config.two_factor.pimcore_admin'] ?? $container->getSecurity_FirewallConfig_TwoFactor_PimcoreAdminService()), []);
    }
}