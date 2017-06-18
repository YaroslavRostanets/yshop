<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 17:36
 */
class ProductController {

    public function actionList(){
        include_once ROOT."/views/product/catalog.php";
        return true;
    }

    public function actionDetail(){
        include_once ROOT."/views/product/detail.php";
        return true;
    }
}
