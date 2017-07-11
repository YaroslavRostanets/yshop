<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 30.06.2017
 * Time: 22:34
 */
class ProfileController {

    public function ActionIndex(){
        include_once ROOT."/views/user/profile.php";
        return true;
    }
}