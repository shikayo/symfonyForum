<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e33f5c78e4b95f1c0efbaa328ce3c37
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6e33f5c78e4b95f1c0efbaa328ce3c37::$classMap;

        }, null, ClassLoader::class);
    }
}
