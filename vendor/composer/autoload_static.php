<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited22a24d8ab5a114ecc0d589d9101c0d
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Namespace\\' => 17,
        ),
        'L' => 
        array (
            'Lib\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Namespace\\' => 
        array (
            0 => 'C:\\Users\\torop\\PhpstormProjects\\cvm-darB\\vendor',
        ),
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libraries',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Posts' => __DIR__ . '/../..' . '/app/controllers/Posts.php',
        'App\\Controllers\\Users' => __DIR__ . '/../..' . '/app/controllers/Users.php',
        'App\\Libraries\\Controller' => __DIR__ . '/../..' . '/app/libraries/Controller.php',
        'App\\Libraries\\Core' => __DIR__ . '/../..' . '/app/libraries/Core.php',
        'App\\Libraries\\Database' => __DIR__ . '/../..' . '/app/libraries/Database.php',
        'App\\Models\\Post' => __DIR__ . '/../..' . '/app/models/Post.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'App\\Tables\\PostsTable' => __DIR__ . '/../..' . '/app/tables/PostsTable.php',
        'App\\Traits\\TimestampableTrait' => __DIR__ . '/../..' . '/app/traits/TimestampableTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited22a24d8ab5a114ecc0d589d9101c0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited22a24d8ab5a114ecc0d589d9101c0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited22a24d8ab5a114ecc0d589d9101c0d::$classMap;

        }, null, ClassLoader::class);
    }
}
