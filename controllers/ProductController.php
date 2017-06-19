<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 17:36
 */
require_once ROOT."/models/Category.php";

class ProductController {

    public function actionList($category = null,$subcategory = null){
        echo "Категория: $category";
        echo "субатегория: $subcategory";
        $categories = Category::getCategoryList();
        //$products = 1;
        include_once ROOT."/views/product/catalog.php";
        return true;
    }

    public function actionDetail(){
        include_once ROOT."/views/product/detail.php";
        return true;
    }
}
