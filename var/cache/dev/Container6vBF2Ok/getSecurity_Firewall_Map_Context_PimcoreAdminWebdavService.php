<?php

namespace Container6vBF2Ok;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_PimcoreAdminWebdavService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.pimcore_admin_webdav' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $container->privates['security.firewall.map.context.pimcore_admin_webdav'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->getSecurity_ContextListener_0Service());
            yield 2 => ($container->privates['debug.security.firewall.authenticator.pimcore_admin_webdav'] ?? $container->load('getDebug_Security_Firewall_Authenticator_PimcoreAdminWebdavService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['scheb_two_factor.security.authentication.trust_resolver'] ?? $container->getSchebTwoFactor_Security_Authentication_TrustResolverService()), ($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService()), 'pimcore_admin_webdav', ($container->privates['security.authenticator.http_basic.pimcore_admin_webdav'] ?? $container->load('getSecurity_Authenticator_HttpBasic_PimcoreAdminWebdavService')), NULL, NULL, ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('pimcore_admin_webdav', 'security.user_checker', '.security.request_matcher.gpN4paB', true, false, 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider', 'pimcore_admin_webdav', 'security.authenticator.http_basic.pimcore_admin_webdav', NULL, NULL, [0 => 'http_basic'], NULL));
    }
}
