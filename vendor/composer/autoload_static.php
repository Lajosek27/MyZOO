<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4a9d7c0dca0e6d31b978c49fbcfceeb
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

    public static $classMap = array (
        'App\\animals\\elephant' => __DIR__ . '/../..' . '/src/animals/elephant.php',
        'App\\animals\\fox' => __DIR__ . '/../..' . '/src/animals/fox.php',
        'App\\animals\\rabbit' => __DIR__ . '/../..' . '/src/animals/rabbit.php',
        'App\\animals\\rino' => __DIR__ . '/../..' . '/src/animals/rino.php',
        'App\\animals\\snowLeopard' => __DIR__ . '/../..' . '/src/animals/snowLeopard.php',
        'App\\animals\\tiger' => __DIR__ . '/../..' . '/src/animals/tiger.php',
        'App\\core\\abstractAnimal' => __DIR__ . '/../..' . '/src/core/abstractAnimal.php',
        'App\\core\\carnivorousIntreface' => __DIR__ . '/../..' . '/src/core/carnivorousIntreface.php',
        'App\\core\\furryAnimalInterface' => __DIR__ . '/../..' . '/src/core/furryAnimalInterface.php',
        'App\\core\\herbivoresIntreface' => __DIR__ . '/../..' . '/src/core/herbivoresIntreface.php',
        'App\\core\\omnivorousIntreface' => __DIR__ . '/../..' . '/src/core/omnivorousIntreface.php',
        'App\\core\\template' => __DIR__ . '/../..' . '/src/core/template.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4a9d7c0dca0e6d31b978c49fbcfceeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4a9d7c0dca0e6d31b978c49fbcfceeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf4a9d7c0dca0e6d31b978c49fbcfceeb::$classMap;

        }, null, ClassLoader::class);
    }
}
