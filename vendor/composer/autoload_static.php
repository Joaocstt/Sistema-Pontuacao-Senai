<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitace664e2ad9e7dba388a85b0f21e1db9
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\DataBase\\Pagination' => __DIR__ . '/../..' . '/app/DataBase/Pagination.php',
        'app\\DataBase\\dataBase' => __DIR__ . '/../..' . '/app/DataBase/dataBase.php',
        'app\\Entity\\Admin' => __DIR__ . '/../..' . '/app/Entity/Admin.php',
        'app\\Entity\\Aluno' => __DIR__ . '/../..' . '/app/Entity/Aluno.php',
        'app\\session\\Login' => __DIR__ . '/../..' . '/app/session/Login.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitace664e2ad9e7dba388a85b0f21e1db9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitace664e2ad9e7dba388a85b0f21e1db9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitace664e2ad9e7dba388a85b0f21e1db9::$classMap;

        }, null, ClassLoader::class);
    }
}