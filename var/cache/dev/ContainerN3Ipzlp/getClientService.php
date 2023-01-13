<?php

namespace ContainerN3Ipzlp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'GuzzleHttp\Client' shared autowired service.
     *
     * @return \GuzzleHttp\Client
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';

        return $container->services['GuzzleHttp\\Client'] = ($container->services['Pimcore\\Http\\ClientFactory'] ?? $container->load('getClientFactoryService'))->createClient();
    }
}
