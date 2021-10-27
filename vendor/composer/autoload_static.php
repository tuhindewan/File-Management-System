<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91e50ef3c32525631e22d98b33179ea0
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Coderex\\Filemanagement\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Coderex\\Filemanagement\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91e50ef3c32525631e22d98b33179ea0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91e50ef3c32525631e22d98b33179ea0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91e50ef3c32525631e22d98b33179ea0::$classMap;

        }, null, ClassLoader::class);
    }
}
