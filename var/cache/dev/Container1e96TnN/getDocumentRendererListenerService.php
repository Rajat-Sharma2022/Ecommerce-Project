<?php

namespace Container1e96TnN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentRendererListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentRendererListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentRendererListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/EventListener/Frontend/DocumentRendererListener.php';

        return $container->privates['Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentRendererListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentRendererListener(($container->privates['Pimcore\\Twig\\Extension\\Templating\\Placeholder\\ContainerService'] ?? ($container->privates['Pimcore\\Twig\\Extension\\Templating\\Placeholder\\ContainerService'] = new \Pimcore\Twig\Extension\Templating\Placeholder\ContainerService())));
    }
}
