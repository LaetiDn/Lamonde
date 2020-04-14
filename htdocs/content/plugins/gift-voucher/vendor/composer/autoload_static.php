<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7141de4fc30f5d7458bb0651df8223ed
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7141de4fc30f5d7458bb0651df8223ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7141de4fc30f5d7458bb0651df8223ed::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7141de4fc30f5d7458bb0651df8223ed::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7141de4fc30f5d7458bb0651df8223ed::$classMap;

        }, null, ClassLoader::class);
    }
}
