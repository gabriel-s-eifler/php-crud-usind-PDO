<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84323f95d60868318dfaeb8ed6a5531c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit84323f95d60868318dfaeb8ed6a5531c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84323f95d60868318dfaeb8ed6a5531c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84323f95d60868318dfaeb8ed6a5531c::$classMap;

        }, null, ClassLoader::class);
    }
}
