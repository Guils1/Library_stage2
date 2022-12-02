<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6784ea66753a953dc9b02bc165b6518
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6784ea66753a953dc9b02bc165b6518::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6784ea66753a953dc9b02bc165b6518::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6784ea66753a953dc9b02bc165b6518::$classMap;

        }, null, ClassLoader::class);
    }
}