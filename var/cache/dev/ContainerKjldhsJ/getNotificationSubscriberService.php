<?php

namespace ContainerKjldhsJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Workflow\EventSubscriber\NotificationSubscriber' shared autowired service.
     *
     * @return \Pimcore\Workflow\EventSubscriber\NotificationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/EventSubscriber/NotificationSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Notification/AbstractNotificationService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Notification/PimcoreNotificationService.php';

        $a = ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService());

        return $container->privates['Pimcore\\Workflow\\EventSubscriber\\NotificationSubscriber'] = new \Pimcore\Workflow\EventSubscriber\NotificationSubscriber(($container->services['Pimcore\\Workflow\\Notification\\NotificationEmailService'] ?? $container->load('getNotificationEmailServiceService')), new \Pimcore\Workflow\Notification\PimcoreNotificationService(($container->services['Pimcore\\Model\\Notification\\Service\\NotificationService'] ?? $container->load('getNotificationServiceService')), $a), $a, ($container->services['Pimcore\\Workflow\\ExpressionService'] ?? $container->load('getExpressionServiceService')), ($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService')));
    }
}
