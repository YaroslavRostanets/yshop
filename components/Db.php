<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 15.06.2017
 * Time: 21:16
 */
class Db {

    public static function getConnection(){
        $config = include_once ROOT.'/config/db_config.php';
        $host = $config['host'];
        $db_name = $config['db_name'];
        $user = $config['user'];
        $password = $config['password'];
        pri($config);
        $db = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);



        return $db;
    }

}


?>

