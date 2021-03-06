<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf04e6182c71a6a819a2c641787eced60
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Problems\\' => 9,
        ),
        'L' => 
        array (
            'Libraries\\' => 10,
        ),
        'B' => 
        array (
            'Brick\\Math\\Tests\\' => 17,
            'Brick\\Math\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Problems\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Problems',
        ),
        'Libraries\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Libraries',
        ),
        'Brick\\Math\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/tests',
        ),
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
    );

    public static $classMap = array (
        'Problems\\Problem11\\Src\\Grid' => __DIR__ . '/../..' . '/Problems/Problem-11/Src/Grid.php',
        'Problems\\Problem11\\Src\\Point' => __DIR__ . '/../..' . '/Problems/Problem-11/Src/Point.php',
        'Problems\\Problem12\\Src\\TriangleNumberIterator' => __DIR__ . '/../..' . '/Problems/Problem-12/Src/TriangleNumberIterator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf04e6182c71a6a819a2c641787eced60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf04e6182c71a6a819a2c641787eced60::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf04e6182c71a6a819a2c641787eced60::$classMap;

        }, null, ClassLoader::class);
    }
}
