<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e1bf4598f1ade7473f9f3579c2286ea
{
    public static $prefixLengthsPsr4 = array (
        'x' => 
        array (
            'xiaobai\\think\\command\\' => 22,
        ),
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'xiaobai\\think\\command\\' => 
        array (
            0 => __DIR__ . '/..' . '/xiaobai/mph/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e1bf4598f1ade7473f9f3579c2286ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e1bf4598f1ade7473f9f3579c2286ea::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8e1bf4598f1ade7473f9f3579c2286ea::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
