<?php

namespace Container6vBF2Ok;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Workflow_PlaceoptionsproviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.workflow.place-options-provider' shared autowired service.
     *
     * @return \Pimcore\Workflow\Place\OptionsProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/DynamicOptionsProvider/MultiSelectOptionsProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/DynamicOptionsProvider/SelectOptionsProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Place/OptionsProvider.php';

        return $container->services['pimcore.workflow.place-options-provider'] = new \Pimcore\Workflow\Place\OptionsProvider(($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService')), ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()));
    }
}
