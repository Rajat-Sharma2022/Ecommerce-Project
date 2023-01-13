<?php

namespace ContainerN3Ipzlp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCodeSnippetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\ActionHandler\CodeSnippet' shared autowired service.
     *
     * @return \Pimcore\Targeting\ActionHandler\CodeSnippet
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/ActionHandler/ResponseTransformingActionHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/ActionHandler/CodeSnippet.php';

        return $container->privates['Pimcore\\Targeting\\ActionHandler\\CodeSnippet'] = new \Pimcore\Targeting\ActionHandler\CodeSnippet(($container->privates['Pimcore\\Http\\Response\\CodeInjector'] ?? $container->getCodeInjectorService()));
    }
}
