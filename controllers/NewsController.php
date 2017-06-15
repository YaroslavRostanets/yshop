<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 17:35
 */
require_once ROOT."/models/News.php";

class NewsController {

    public function actionList(){
        $newsList = News::getNewsList();
        pri($newsList);
    }

    public function actionView($category, $id) {
        return true;
    }
}