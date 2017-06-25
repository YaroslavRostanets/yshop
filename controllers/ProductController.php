<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 17:36
 */
require_once ROOT."/models/Category.php";

class ProductController {
    public $categoryName;
    public $subCategoryName;

    public function actionList($category = NULL,$subcategory = NULL){
        $categories = Category::getCategoryList();
        echo("Категория-".$category."-");


        if(isset($category)){
            echo "22";
            $categoryName = Category::getCategoryName(1);
            echo ($categoryName);
            /*
            if(isset($subcategory)){
                $subCategoryName = Category::getCategoryList($subcategory);
            }
            */
        }


        //$products = 1;
        include_once ROOT."/views/product/catalog.php";
        return true;
    }

    public function actionDetail(){
        include_once ROOT."/views/product/detail.php";
        return true;
    }
}
