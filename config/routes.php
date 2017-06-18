<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 15:17
 */
return array(
    "news/view/([0-z]+)" => "news/view/$1", //news/sport/23
    //"news/view/([a-z]+)/([0-z]+)" => "news/view/$1/$2", //news/sport/23
    "news" => "news/list",
    "product" => "produts/list",
    "product/detail/([0-9]+)" => "product/detail",
    "" => "site/index"
);