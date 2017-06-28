<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 15:17
 */
return array(
    "news/view/([0-z]+)" => "news/view/$1", //news/sport/23
    "news" => "news/list",

    "product/([0-9]+)/([0-9]+)" => "product/list/$1/$2", //Поиск по субкатегории
    "product/([0-9]+)" => "product/list/$1", //Поиск по субкатегории

    "product/detail/([0-9]+)" => "product/detail/$1", //Детальная (карточка товара)

    "product" => "product/list", //Весь каталог



    "contact" => "contact/index",

    "login" => "site/auth",

    "" => "site/index"
);