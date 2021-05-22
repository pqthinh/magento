<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInite17e6c718ee8451eb15cf91e2b8b49fe
=======
class ComposerAutoloaderInit445e2a8a59647c40d13014d15a920d7c
>>>>>>> 2d1c2228b901c817b361d98bc4434f9288c6c371
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

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInite17e6c718ee8451eb15cf91e2b8b49fe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInite17e6c718ee8451eb15cf91e2b8b49fe', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\Composer\Autoload\ComposerStaticInite17e6c718ee8451eb15cf91e2b8b49fe::getInitializer($loader));
=======
        spl_autoload_register(array('ComposerAutoloaderInit445e2a8a59647c40d13014d15a920d7c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInit445e2a8a59647c40d13014d15a920d7c', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

            call_user_func(\Composer\Autoload\ComposerStaticInit445e2a8a59647c40d13014d15a920d7c::getInitializer($loader));
>>>>>>> 2d1c2228b901c817b361d98bc4434f9288c6c371
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
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInite17e6c718ee8451eb15cf91e2b8b49fe::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit445e2a8a59647c40d13014d15a920d7c::$files;
>>>>>>> 2d1c2228b901c817b361d98bc4434f9288c6c371
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequiree17e6c718ee8451eb15cf91e2b8b49fe($fileIdentifier, $file);
=======
            composerRequire445e2a8a59647c40d13014d15a920d7c($fileIdentifier, $file);
>>>>>>> 2d1c2228b901c817b361d98bc4434f9288c6c371
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequiree17e6c718ee8451eb15cf91e2b8b49fe($fileIdentifier, $file)
=======
function composerRequire445e2a8a59647c40d13014d15a920d7c($fileIdentifier, $file)
>>>>>>> 2d1c2228b901c817b361d98bc4434f9288c6c371
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
