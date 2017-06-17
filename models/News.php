<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 12.06.2017
 * Time: 22:15
 */
require_once ROOT . "/components/Db.php";


class News {


    public static function getNewsBiId($id){
        $id = intval($id);
        if($id){
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $one_news = $result->fetch();

            return $one_news;
        }

    }

    public static function getNewsList(){
        //$db = Db::getConnection();
        return array('sdsdsd','ssss');
    }
}