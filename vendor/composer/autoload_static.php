<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d2a952117aeadc80d8cd44e18e27aca
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FurqanSiddiqui\\Ethereum\\' => 24,
            'FurqanSiddiqui\\ECDSA\\' => 21,
            'FurqanSiddiqui\\BIP39\\' => 21,
            'FurqanSiddiqui\\BIP32\\' => 21,
        ),
        'C' => 
        array (
            'Comely\\DataTypes\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FurqanSiddiqui\\Ethereum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FurqanSiddiqui\\ECDSA\\' => 
        array (
            0 => __DIR__ . '/..' . '/furqansiddiqui/ecdsa-php/src',
        ),
        'FurqanSiddiqui\\BIP39\\' => 
        array (
            0 => __DIR__ . '/..' . '/furqansiddiqui/bip39-mnemonic-php/src',
        ),
        'FurqanSiddiqui\\BIP32\\' => 
        array (
            0 => __DIR__ . '/..' . '/furqansiddiqui/bip32-keypair-php/src',
        ),
        'Comely\\DataTypes\\' => 
        array (
            0 => __DIR__ . '/..' . '/comely-io/data-types/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d2a952117aeadc80d8cd44e18e27aca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d2a952117aeadc80d8cd44e18e27aca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d2a952117aeadc80d8cd44e18e27aca::$classMap;

        }, null, ClassLoader::class);
    }
}
