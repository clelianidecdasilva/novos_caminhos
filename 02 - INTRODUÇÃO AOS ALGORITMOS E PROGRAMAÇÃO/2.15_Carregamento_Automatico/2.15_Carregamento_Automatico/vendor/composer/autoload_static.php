<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33eceba83e23190cc38f85c1c0a7b53a
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33eceba83e23190cc38f85c1c0a7b53a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33eceba83e23190cc38f85c1c0a7b53a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
