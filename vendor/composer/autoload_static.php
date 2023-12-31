<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d2659f7eed43f4818cd5ea07d22f997
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d2659f7eed43f4818cd5ea07d22f997::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d2659f7eed43f4818cd5ea07d22f997::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d2659f7eed43f4818cd5ea07d22f997::$classMap;

        }, null, ClassLoader::class);
    }
}
