<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96a1360ea8fedb4db06a34b53fd644fc
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96a1360ea8fedb4db06a34b53fd644fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96a1360ea8fedb4db06a34b53fd644fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96a1360ea8fedb4db06a34b53fd644fc::$classMap;

        }, null, ClassLoader::class);
    }
}
