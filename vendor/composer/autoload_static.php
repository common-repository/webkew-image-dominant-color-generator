<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit173742714688a6167f89b559307ca3ba
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'ColorThief\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ColorThief\\' => 
        array (
            0 => __DIR__ . '/..' . '/ksubileau/color-thief-php/src/ColorThief',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit173742714688a6167f89b559307ca3ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit173742714688a6167f89b559307ca3ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit173742714688a6167f89b559307ca3ba::$classMap;

        }, null, ClassLoader::class);
    }
}
