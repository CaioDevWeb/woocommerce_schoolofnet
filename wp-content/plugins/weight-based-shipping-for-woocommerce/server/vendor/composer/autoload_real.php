<?php

// autoload_real.php @generated by Composer

class WbsVendors_ComposerAutoloaderInitb464cf3e2f5f572d38748a58ff3d8f59
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('WbsVendors\Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('WbsVendors_ComposerAutoloaderInitb464cf3e2f5f572d38748a58ff3d8f59', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \WbsVendors\Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('WbsVendors_ComposerAutoloaderInitb464cf3e2f5f572d38748a58ff3d8f59', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\WbsVendors\Composer\Autoload\ComposerStaticInitb464cf3e2f5f572d38748a58ff3d8f59::getInitializer($loader));
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
            $includeFiles = \WbsVendors\Composer\Autoload\ComposerStaticInitb464cf3e2f5f572d38748a58ff3d8f59::$files;
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireb464cf3e2f5f572d38748a58ff3d8f59($fileIdentifier, $file);
        }

        return $loader;
    }
}

function composerRequireb464cf3e2f5f572d38748a58ff3d8f59($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
