<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7fcf8bc1ee479ead3f6ec8582027843f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7fcf8bc1ee479ead3f6ec8582027843f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7fcf8bc1ee479ead3f6ec8582027843f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}