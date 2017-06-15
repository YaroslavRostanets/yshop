<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 12.06.2017
 * Time: 22:15
 */
require_once ROOT . "/components/Db.php";


class News {


    public function getNewsBiId($id){
        $db = Db::getConnection();
        

    }

    public static function getNewsList(){
        //$db = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
        return array(12,12);
    }
}