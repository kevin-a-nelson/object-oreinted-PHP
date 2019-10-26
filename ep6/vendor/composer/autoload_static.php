<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6544421f81b5cd41ee3e8a7f88428de5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6544421f81b5cd41ee3e8a7f88428de5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6544421f81b5cd41ee3e8a7f88428de5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
