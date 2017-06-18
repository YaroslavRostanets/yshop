<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 11.06.2017
 * Time: 15:04
 */
define("ROOT",dirname(__FILE__));
define("SITE_ROOT","/php/cms/");
define("TEMPLATE",SITE_ROOT."/template/");

function pri($obj){
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
};