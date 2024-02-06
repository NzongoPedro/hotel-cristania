<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb547e77607ce3d4636b860d0d503c689
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb547e77607ce3d4636b860d0d503c689::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb547e77607ce3d4636b860d0d503c689::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb547e77607ce3d4636b860d0d503c689::$classMap;

        }, null, ClassLoader::class);
    }
}
