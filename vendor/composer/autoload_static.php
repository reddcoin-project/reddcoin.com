<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd901e4423568e138a06c0f049afd148
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd901e4423568e138a06c0f049afd148::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd901e4423568e138a06c0f049afd148::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd901e4423568e138a06c0f049afd148::$classMap;

        }, null, ClassLoader::class);
    }
}
