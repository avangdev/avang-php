<?php

// require the autoloader class if you haven't used composer to install the package
require_once dirname(__FILE__) . '/../AvangEmailApi/Autoloader.php';

// register the autoloader if you haven't used composer to install the package
AvangEmailApi_Autoloader::register();

// if using a framework that already uses an autoloading mechanism, like Yii for example,
// you can register the autoloader like:
// Yii::registerAutoloader(array('AvangEmailApi_Autoloader', 'autoloader'), true);


// configuration object
$config = new AvangEmailApi_Config(array(
    'publicKey'     => 'PUBLIC-KEY',
    'privateKey'    => 'PRIVATE-KEY',

    // components
    'components' => array(
        'cache' => array(
            'class'     => 'AvangEmailApi_Cache_File',
            'filesPath' => dirname(__FILE__) . '/../AvangEmailApi/Cache/data/cache', // make sure it is writable by webserver
        )
    ),
));

// now inject the configuration and we are ready to make api calls
AvangEmailApi_Base::setConfig($config);

// start UTC
date_default_timezone_set('UTC');
