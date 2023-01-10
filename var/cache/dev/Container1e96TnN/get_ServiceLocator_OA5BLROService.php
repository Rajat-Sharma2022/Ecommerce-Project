<?php

namespace Container1e96TnN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OA5BLROService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oA5BLRO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oA5BLRO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'Pimcore\\Workflow\\Manager', 'getManagerService', true],
            'workflowRegistry' => ['privates', 'workflow.registry', 'getWorkflow_RegistryService', true],
        ], [
            'manager' => 'Pimcore\\Workflow\\Manager',
            'workflowRegistry' => '?',
        ]);
    }
}
