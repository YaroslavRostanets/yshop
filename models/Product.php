<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 18.06.2017
 * Time: 17:56
 */

class Product {
    const PRODUCTS_ON_PAGE = 6;

    public static function getAllProducts($page){
        $db = Db::getConnection();
        $offset = self::PRODUCTS_ON_PAGE * (--$page);
        $result = $db->query("SELECT * FROM product LIMIT ".self::PRODUCTS_ON_PAGE." OFFSET $offset;");
            $count = $db->query("SELECT COUNT(*) FROM product");
            $count->setFetchMode(PDO::FETCH_NUM);
            $count = implode($count->fetch());
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $arrResult = array(
            'data' => array(),
            'pages' => intval($count / self::PRODUCTS_ON_PAGE)
        );
        while($row = $result->fetch()){
            $arrResult['data'][] = $row;
        }

        return $arrResult;
    }

    public static function getProductByCatId($id,$offset) {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product WHERE id=$id LIMIT=".self::PRODUCTS_ON_PAGE." OFFSET=$offset");
        $result->setFetchMode(PDO::FETCH_NUM);
        $result = implode( $result->fetch() );

        return $result;
    }

    public static function getProductsBySubCategory($subcategory, $page){
        $db = Db::getConnection();
        $offset = self::PRODUCTS_ON_PAGE * (--$page);

        $result = $db->query("SELECT * FROM subcategory WHERE id=$subcategory LIMIT ".self::PRODUCTS_ON_PAGE." OFFSET $offset;");
            $count = $db->query("SELECT COUNT(*) FROM subcategory WHERE id=$subcategory");
            $count->setFetchMode(PDO::FETCH_NUM);
            $count = implode($count->fetch());
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $arrResult = array(
            'data' => array(),
            'pages' => intval($count / self::PRODUCTS_ON_PAGE)
        );
        while($row = $result->fetch()){
            $arrResult['data'][] = $row;
        }

        return $arrResult;

    }
}