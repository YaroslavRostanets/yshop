<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 25.06.2017
 * Time: 19:13
 */

class Pagination {

    public static function rendPagination($page = NULL, $pages = NULL){
        $pagination = include ROOT."/layouts/pagination.php";
        return $pagination;
    }

}
