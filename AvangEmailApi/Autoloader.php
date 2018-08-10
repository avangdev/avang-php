<?php
/**
 * This file contains the autoloader class for the AvangEmailApi PHP-SDK.
 *
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @link http://www.mailwizz.com/
 * @copyright 2013-2017 http://www.mailwizz.com/
 */
 
 
/**
 * The AvangEmailApi Autoloader class.
 * 
 * From within a Yii Application, you would load this as:
 * 
 * <pre>
 * require_once(Yii::getPathOfAlias('application.vendors.AvangEmailApi.Autoloader').'.php');
 * Yii::registerAutoloader(array('AvangEmailApi_Autoloader', 'autoloader'), true);
 * </pre>
 * 
 * Alternatively you can:
 * <pre>
 * require_once('Path/To/AvangEmailApi/Autoloader.php');
 * AvangEmailApi_Autoloader::register();
 * </pre>
 * 
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @package AvangEmailApi
 * @since 1.0
 * @link https://www.avangemail.com/
 * @author avangemail <avangemail@gmail.com>
 */
class AvangEmailApi_Autoloader
{
    /**
     * The registrable autoloader
     * 
     * @param string $class
     */
    public static function autoloader($class)
    {
        if (strpos($class, 'AvangEmailApi') === 0) {

            $className = str_replace('_', '/', $class);
            $className = substr($className, 13);
            //echo $className;exit();
            if (is_file($classFile = dirname(__FILE__) . '/'. $className.'.php')) {
                require_once($classFile);

            }
        }
    }
    
    /**
     * Registers the AvangEmailApi_Autoloader::autoloader()
     */
    public static function register()
    {
        spl_autoload_register(array('AvangEmailApi_Autoloader', 'autoloader'));
    }
}