<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 30.06.2017
 * Time: 23:08
 */
/*
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
*/
function __autoload($class_name){
    $array_path = array(
        '/components/',
        '/models/'
    );

    foreach ($array_path as $path_name){
        $path = ROOT.$path_name.$class_name.'.php';

        if(is_file($path)){
            include $path;
        }
    }
}