<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbcf62dd9d52e1ca4cc9823ce5fb66b3a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbcf62dd9d52e1ca4cc9823ce5fb66b3a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbcf62dd9d52e1ca4cc9823ce5fb66b3a', 'loadClassLoader'));

        $includePaths = require __DIR__ . '/include_paths.php';
        $includePaths[] = get_include_path();
        set_include_path(implode(PATH_SEPARATOR, $includePaths));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbcf62dd9d52e1ca4cc9823ce5fb66b3a::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitbcf62dd9d52e1ca4cc9823ce5fb66b3a::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirebcf62dd9d52e1ca4cc9823ce5fb66b3a($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirebcf62dd9d52e1ca4cc9823ce5fb66b3a($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
