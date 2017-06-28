<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 17:36
 */
require_once ROOT."/models/Category.php";
require_once ROOT."/models/Product.php";
require_once ROOT."/components/Db.php";
require_once ROOT."/components/Pagination.php";


class ProductController {
    public function getProductsByCatId($id){

    }

    public function actionList($category = NULL,$subcategory = NULL){
        $page = (isset($_GET['page']))? $_GET['page'] : 1;
        $categories = Category::getCategoryList();
        $productArr = array();


        if(isset($category)){
            $categoryName = Category::getCategoryName($category);
            if(isset($subcategory)){
                $subCategoryName = Category::getSubCategoryName($subcategory);
                $productArr = Product::getProductsBySubCategory();
            }
        } else {
            $productArr = Product::getAllProducts($page);
            pri($productArr);
        }




        include_once ROOT."/views/product/catalog.php";
        return true;
    }

    public function actionDetail($id = NULL){
        include_once ROOT."/views/product/detail.php";
        return true;
    }
}
