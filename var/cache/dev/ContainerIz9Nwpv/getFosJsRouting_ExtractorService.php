<?php

namespace ContainerIz9Nwpv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_ExtractorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_js_routing.extractor' shared service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Extractor/ExposedRoutesExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Extractor/ExposedRoutesExtractor.php';

        return $container->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(($container->services['router'] ?? $container->getRouterService()), [], $container->targetDir.'', $container->parameters['kernel.bundles']);
    }
}
