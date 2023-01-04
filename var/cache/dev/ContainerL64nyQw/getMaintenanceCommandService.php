<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaintenanceCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\MaintenanceCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\MaintenanceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/MaintenanceCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\MaintenanceCommand(($container->privates['Pimcore\\Maintenance\\Executor'] ?? $container->load('getExecutorService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        $instance->setName('pimcore:maintenance');
        $instance->setAliases([0 => 'maintenance']);

        return $instance;
    }
}
