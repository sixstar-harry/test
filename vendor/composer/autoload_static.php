<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdd0269688551089213c3417c6ba3c24
{
    public static $files = array (
        '9ab1d32d394205e0bc6507d47d7cf8f1' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Package\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Package\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdd0269688551089213c3417c6ba3c24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdd0269688551089213c3417c6ba3c24::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
