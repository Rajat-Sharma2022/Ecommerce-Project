<?php

namespace ContainerCaieTnk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVisitedPagesCounterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\DataProvider\VisitedPagesCounter' shared autowired service.
     *
     * @return \Pimcore\Targeting\DataProvider\VisitedPagesCounter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/DataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/VisitedPagesCounter.php';

        return $container->privates['Pimcore\\Targeting\\DataProvider\\VisitedPagesCounter'] = new \Pimcore\Targeting\DataProvider\VisitedPagesCounter(($container->privates['Pimcore\\Targeting\\Service\\VisitedPagesCounter'] ?? $container->load('getVisitedPagesCounter2Service')));
    }
}
