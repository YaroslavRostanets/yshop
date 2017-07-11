<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 15.06.2017
 * Time: 21:16
 */

class Db {

    public static function getConnection(){
        $config = include ROOT.'/config/db_config.php';
        $db_name = $config['db_name'];
        $host = $config['host'];
        $dsn = "mysql:dbname=$db_name;host=$host;charset=utf8";

        $db = new PDO($dsn, $config['user'], $config['password']);

        return $db;
    }

}


?>

