<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74032167abf4a777fe4e6408fabd4723
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProductGeolocationForWoo\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProductGeolocationForWoo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ProductGeolocationForWoo\\Admin\\PGFW_Admin' => __DIR__ . '/../..' . '/includes/Admin/PGFW_Admin.php',
        'ProductGeolocationForWoo\\Admin\\PGFW_Menus' => __DIR__ . '/../..' . '/includes/Admin/PGFW_Menus.php',
        'ProductGeolocationForWoo\\Admin\\PGFW_Settings' => __DIR__ . '/../..' . '/includes/Admin/PGFW_Settings.php',
        'ProductGeolocationForWoo\\Admin\\SettingsFields' => __DIR__ . '/../..' . '/includes/Admin/SettingsFields.php',
        'ProductGeolocationForWoo\\Install\\Installer' => __DIR__ . '/../..' . '/includes/Install/Installer.php',
        'ProductGeolocationForWoo\\PGFW_Assets' => __DIR__ . '/../..' . '/includes/PGFW_Assets.php',
        'ProductGeolocationForWoo\\PGFW_Geolocation' => __DIR__ . '/../..' . '/includes/PGFW_Geolocation.php',
        'ProductGeolocationForWoo\\PGFW_Geolocation_Product' => __DIR__ . '/../..' . '/includes/PGFW_Geolocation_Product.php',
        'ProductGeolocationForWoo\\PGFW_Geolocation_Shop' => __DIR__ . '/../..' . '/includes/PGFW_Geolocation_Shop.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74032167abf4a777fe4e6408fabd4723::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74032167abf4a777fe4e6408fabd4723::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74032167abf4a777fe4e6408fabd4723::$classMap;

        }, null, ClassLoader::class);
    }
}
