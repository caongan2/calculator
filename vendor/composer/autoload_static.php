<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd15d8ada34f63961404a95b4be394905
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd15d8ada34f63961404a95b4be394905::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd15d8ada34f63961404a95b4be394905::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd15d8ada34f63961404a95b4be394905::$classMap;

        }, null, ClassLoader::class);
    }
}
