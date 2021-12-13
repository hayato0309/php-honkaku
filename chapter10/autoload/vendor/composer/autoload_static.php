<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit948520ef5c2796593dc3ee5762544727
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApplication\\Map\\Pin\\' => 22,
            'MyApplication\\Map\\Image\\' => 24,
            'MyApplication\\Map\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApplication\\Map\\Pin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library/mamp/pin',
        ),
        'MyApplication\\Map\\Image\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library/map/image',
        ),
        'MyApplication\\Map\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library/map',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit948520ef5c2796593dc3ee5762544727::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit948520ef5c2796593dc3ee5762544727::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit948520ef5c2796593dc3ee5762544727::$classMap;

        }, null, ClassLoader::class);
    }
}