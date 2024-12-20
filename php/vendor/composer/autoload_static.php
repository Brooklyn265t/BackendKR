<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb1698da71ff20aef900f297c204ccff
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '7bb4f001eb5212bde073bf47a4bbedad' => __DIR__ . '/..' . '/szymach/c-pchart/constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'C' => 
        array (
            'CpChart\\' => 8,
        ),
        'A' => 
        array (
            'Amenadiel\\JpGraph\\Util\\' => 23,
            'Amenadiel\\JpGraph\\Themes\\' => 25,
            'Amenadiel\\JpGraph\\Text\\' => 23,
            'Amenadiel\\JpGraph\\Plot\\' => 23,
            'Amenadiel\\JpGraph\\Image\\' => 24,
            'Amenadiel\\JpGraph\\Graph\\Tick\\' => 29,
            'Amenadiel\\JpGraph\\Graph\\Scale\\' => 30,
            'Amenadiel\\JpGraph\\Graph\\Axis\\' => 29,
            'Amenadiel\\JpGraph\\Graph\\' => 24,
            'Amenadiel\\JpGraph\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
        'CpChart\\' => 
        array (
            0 => __DIR__ . '/..' . '/szymach/c-pchart/src',
        ),
        'Amenadiel\\JpGraph\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/util',
        ),
        'Amenadiel\\JpGraph\\Themes\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/themes',
        ),
        'Amenadiel\\JpGraph\\Text\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/text',
        ),
        'Amenadiel\\JpGraph\\Plot\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/plot',
        ),
        'Amenadiel\\JpGraph\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/image',
        ),
        'Amenadiel\\JpGraph\\Graph\\Tick\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/graph/tick',
        ),
        'Amenadiel\\JpGraph\\Graph\\Scale\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/graph/scale',
        ),
        'Amenadiel\\JpGraph\\Graph\\Axis\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/graph/axis',
        ),
        'Amenadiel\\JpGraph\\Graph\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src/graph',
        ),
        'Amenadiel\\JpGraph\\' => 
        array (
            0 => __DIR__ . '/..' . '/amenadiel/jpgraph/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb1698da71ff20aef900f297c204ccff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb1698da71ff20aef900f297c204ccff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb1698da71ff20aef900f297c204ccff::$classMap;

        }, null, ClassLoader::class);
    }
}
