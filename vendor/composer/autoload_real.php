<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita4cd831d3cbb4c0c0862e2eef25a33cb
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

        spl_autoload_register(array('ComposerAutoloaderInita4cd831d3cbb4c0c0862e2eef25a33cb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita4cd831d3cbb4c0c0862e2eef25a33cb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita4cd831d3cbb4c0c0862e2eef25a33cb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
