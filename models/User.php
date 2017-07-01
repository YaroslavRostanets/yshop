<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 01.07.2017
 * Time: 15:38
 */
class User {

    public static function checkName($name){
        if(strlen($name) > 3){
            return true;
        }
        return 'Длинна имени должна быть больше трех символов';
    }

    public static function checkEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return 'Неправильный формат email';
    }

    public static function checkPassword($password,$password_confirm){
        if($password !== $password_confirm) {
            return 'Пароли не совпадают';
        }
        if($password < 6){
            return 'Длинна пароля должна быть 6 или более символов';
        }
    }

    public static function checkEmailExist() {

        return true;
    }
}