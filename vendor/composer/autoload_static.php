<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48d6a12d51ea018de102907048efde75
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '65fec9ebcfbb3cbb4fd0d519687aea01' => __DIR__ . '/..' . '/danielstjules/stringy/src/Create.php',
        '4ceedf97791d93203e20d2cdee63c4d8' => __DIR__ . '/..' . '/funct/funct/src/Collection.php',
        '3fa95b6de8b4ba809a4086bd187dc285' => __DIR__ . '/..' . '/funct/funct/src/General.php',
        '9a6e6879c844337a8d58143b6e0512ae' => __DIR__ . '/..' . '/funct/funct/src/Invoke.php',
        'a73a3901d9218302158239badf0be56a' => __DIR__ . '/..' . '/funct/funct/src/Object.php',
        '3fdd7195df86076e7b28f4a0e5b97dbd' => __DIR__ . '/..' . '/funct/funct/src/Strings.php',
        'fe62ba7e10580d903cc46d808b5961a4' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/helpers.php',
        'caf31cc6ec7cf2241cb6f12c226c3846' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/alias.php',
        '772f50f473455bcd9bf6abfac2fd5911' => __DIR__ . '/../..' . '/start.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tightenco\\Collect\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Stringy\\' => 8,
        ),
        'F' => 
        array (
            'Funct\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tightenco\\Collect\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Collect',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Stringy\\' => 
        array (
            0 => __DIR__ . '/..' . '/danielstjules/stringy/src',
        ),
        'Funct\\' => 
        array (
            0 => __DIR__ . '/..' . '/funct/funct/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48d6a12d51ea018de102907048efde75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48d6a12d51ea018de102907048efde75::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
