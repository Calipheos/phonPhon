<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0113f39674f5767c10e434e8e84ed053
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phonPhon\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phonPhon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0113f39674f5767c10e434e8e84ed053::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0113f39674f5767c10e434e8e84ed053::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
