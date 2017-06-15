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
    }

    public function actionView($id) {
        $arrResult = News::getNewsBiId($id);

        require_once ROOT.'/views/news/oneNews.php';
        //return true;
    }

}