<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 17:36
 */
require_once ROOT."/models/Category.php";

class ProductController {
    public function getProductsByCatId($id){

    }

    public function actionList($category = NULL,$subcategory = NULL){
        $categories = Category::getCategoryList();

        if(isset($category)){
            $categoryName = Category::getCategoryName($category);
            if(isset($subcategory)){
                $subCategoryName = Category::getSubCategoryName($subcategory);
            }
        }


        include_once ROOT."/views/product/catalog.php";
        return true;
    }

    public function actionDetail(){
        include_once ROOT."/views/product/detail.php";
        return true;
    }
}
