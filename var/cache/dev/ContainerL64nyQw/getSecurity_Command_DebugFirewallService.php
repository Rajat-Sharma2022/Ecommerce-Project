<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.hNQzc35'] ?? $container->get_ServiceLocator_HNQzc35Service()), ($container->privates['.service_locator.dLB9r3W'] ?? $container->load('get_ServiceLocator_DLB9r3WService')), ['pimcore_admin_webdav' => [0 => ($container->privates['security.authenticator.http_basic.pimcore_admin_webdav'] ?? $container->load('getSecurity_Authenticator_HttpBasic_PimcoreAdminWebdavService'))], 'pimcore_admin' => [0 => ($container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminLoginAuthenticator'] ?? $container->load('getAdminLoginAuthenticatorService')), 1 => ($container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminTokenAuthenticator'] ?? $container->load('getAdminTokenAuthenticatorService')), 2 => ($container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminSessionAuthenticator'] ?? $container->load('getAdminSessionAuthenticatorService')), 3 => ($container->privates['security.authenticator.two_factor.pimcore_admin'] ?? $container->load('getSecurity_Authenticator_TwoFactor_PimcoreAdminService'))]], true);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
