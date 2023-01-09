<?php

namespace ContainerIz9Nwpv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestaSitemap_DumpCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'presta_sitemap.dump_command' shared service.
     *
     * @return \Presta\SitemapBundle\Command\DumpSitemapsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/src/Command/DumpSitemapsCommand.php';

        $container->services['presta_sitemap.dump_command'] = $instance = new \Presta\SitemapBundle\Command\DumpSitemapsCommand(($container->services['router'] ?? $container->getRouterService()), ($container->services['presta_sitemap.dumper'] ?? $container->load('getPrestaSitemap_DumperService')), (\dirname(__DIR__, 4).'/public'));

        $instance->setName('presta:sitemaps:dump');

        return $instance;
    }
}
