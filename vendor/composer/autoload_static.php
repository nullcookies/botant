<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit143730192d62a7b9324dbb5a9f39f5f5
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit143730192d62a7b9324dbb5a9f39f5f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit143730192d62a7b9324dbb5a9f39f5f5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
