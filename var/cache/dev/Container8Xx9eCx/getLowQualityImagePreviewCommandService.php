<?php

namespace Container8Xx9eCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLowQualityImagePreviewCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Pimcore\Bundle\CoreBundle\Command\LowQualityImagePreviewCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\LowQualityImagePreviewCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/LowQualityImagePreviewCommand.php';

        return $container->services['console.command.public_alias.Pimcore\\Bundle\\CoreBundle\\Command\\LowQualityImagePreviewCommand'] = new \Pimcore\Bundle\CoreBundle\Command\LowQualityImagePreviewCommand();
    }
}
