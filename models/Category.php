<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 18.06.2017
 * Time: 13:30
 */

class Category {

    public static function getCategoryName($id) {
        $db = Db::getConnection();

        $result = $db->query("SELECT name FROM category WHERE id=$id");
        $result->setFetchMode(PDO::FETCH_NUM);
        $result = implode( $result->fetch() );

        return $result;


    }

    public static function getSubCategoryName($id) {
        $db = Db::getConnection();

        $result = $db->query("SELECT name FROM subcategory WHERE id=$id");
        $result->setFetchMode(PDO::FETCH_NUM);
        $result = implode( $result->fetch() );

        return $result;

    }

    public static function getCategoryList() {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM category ORDER BY sort");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $arrResult = array();
        while($row = $result->fetch()){
            $subCategoryResult = $db->query("SELECT * FROM subcategory WHERE parent_id=$row[id]");
            $subCategoryResult->setFetchMode(PDO::FETCH_ASSOC);
            $row['subcategory'] = array();
            while($subrow = $subCategoryResult->fetch()){
                $row['subcategory'][] = $subrow;
            }
            $arrResult[] = $row;

        }

        return $arrResult;
    }
}