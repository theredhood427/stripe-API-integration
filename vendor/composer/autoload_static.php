<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ad5ec3429e8f246f26797a5cf6d399f
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Stripe\\' => 12,
        ),
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Stripe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ad5ec3429e8f246f26797a5cf6d399f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ad5ec3429e8f246f26797a5cf6d399f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ad5ec3429e8f246f26797a5cf6d399f::$classMap;

        }, null, ClassLoader::class);
    }
}
