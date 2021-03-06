<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8e81be837290db7b7bd7037d2d4e28b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JasonGrimes' => 
            array (
                0 => __DIR__ . '/..' . '/jasongrimes/paginator/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8e81be837290db7b7bd7037d2d4e28b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8e81be837290db7b7bd7037d2d4e28b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb8e81be837290db7b7bd7037d2d4e28b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
