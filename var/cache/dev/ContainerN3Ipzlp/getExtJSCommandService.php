<?php

namespace ContainerN3Ipzlp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExtJSCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\ExtJSCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\ExtJSCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/ExtJSCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\ExtJSCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\ExtJSCommand();

        $instance->setName('pimcore:extjs');

        return $instance;
    }
}
