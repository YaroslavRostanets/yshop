<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 17:36
 */



class ProductController {
    public function getProductsByCatId($id){

    }

    public function actionList($category = NULL,$subcategory = NULL){
        $page = (isset($_GET['page']))? $_GET['page'] : 1;
        $pages = 10; //Default
        $categories = Category::getCategoryList();
        $productArr = array();


        if(isset($category)){
            $categoryName = Category::getCategoryName($category);
            $result = Product::getProductByCategory($category, $page);
            if(isset($subcategory)){
                $subCategoryName = Category::getSubCategoryName($subcategory);
                $result = Product::getProductsBySubCategory($subcategory, $page);
            }
        } else {
            $result = Product::getAllProducts($page);
        }
        $productArr = $result['data'];
        $pages = $result['pages'];

        include_once ROOT."/views/product/catalog.php";
        return true;
    }

    public function actionDetail($id = NULL){
        $product = Product::getProductById($id);
        $sliderImg = explode('|',$product['images']);

        $sizes = explode('|',$product['size']);



        include_once ROOT."/views/product/detail.php";
        return true;
    }
}
