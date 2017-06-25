<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 18.06.2017
 * Time: 17:56
 */
include ROOT."/components/Db.php";

class Product {

    public static function getAllProducts(){
        $db = Db::getConnection();
    }

    public static function getProductByCatId() {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product WHERE id=$id");
        $result->setFetchMode(PDO::FETCH_NUM);
        $result = implode( $result->fetch() );

        return $result;
    }
}