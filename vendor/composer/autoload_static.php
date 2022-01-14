<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit322240c94a6ff91631b35295c18ab8fd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit322240c94a6ff91631b35295c18ab8fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit322240c94a6ff91631b35295c18ab8fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit322240c94a6ff91631b35295c18ab8fd::$classMap;

        }, null, ClassLoader::class);
    }
}
