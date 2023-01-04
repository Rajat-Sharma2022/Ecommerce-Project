<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_KernelExceptionListener_TwoFactor_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.kernel_exception_listener.two_factor.pimcore_admin' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\Firewall\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Firewall/ExceptionListener.php';

        return $container->privates['security.authentication.kernel_exception_listener.two_factor.pimcore_admin'] = new \Scheb\TwoFactorBundle\Security\Http\Firewall\ExceptionListener('pimcore_admin', ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.authentication_required_handler.two_factor.pimcore_admin'] ?? $container->load('getSecurity_Authentication_AuthenticationRequiredHandler_TwoFactor_PimcoreAdminService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
