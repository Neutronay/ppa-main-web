<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f4c22a1dba7891c6ba486fd3ce7c528
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/validation',
            1 => __DIR__ . '/../..' . '/src/utils',
            2 => __DIR__ . '/../..' . '/src/models',
            3 => __DIR__ . '/../..' . '/src/controllers',
            4 => __DIR__ . '/../..' . '/src/database',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f4c22a1dba7891c6ba486fd3ce7c528::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f4c22a1dba7891c6ba486fd3ce7c528::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f4c22a1dba7891c6ba486fd3ce7c528::$classMap;

        }, null, ClassLoader::class);
    }
}