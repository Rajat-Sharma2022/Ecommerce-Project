<?php

namespace ContainerPVntJdd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkflowManagementListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/EventListener/WorkflowManagementListener.php';

        return $container->services['Pimcore\\Bundle\\CoreBundle\\EventListener\\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener(($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService')), ($container->services['Pimcore\\Workflow\\Place\\StatusInfo'] ?? $container->load('getStatusInfoService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['Pimcore\\Workflow\\ActionsButtonService'] ?? $container->load('getActionsButtonServiceService')));
    }
}
