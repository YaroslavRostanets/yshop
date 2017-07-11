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
            return '';
        }
        return 'Длинна имени должна быть больше трех символов';
    }

    public static function checkEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailExist = self::checkEmailExist($email);
            if($emailExist !== true){
                return $emailExist;
            }
            return '';
        }
        return 'Неправильный формат email';
    }

    public static function checkPassword($password,$password_confirm){
        if($password !== $password_confirm) {
            return 'Пароли не совпадают';
        }
        if(strlen($password) < 6){
            return 'Длинна пароля должна быть 6 или более символов';
        }
    }

    public static function checkEmailExist($email) {
        $db = Db::getConnection();
        $sql = "SELECT COUNT(*) FROM user WHERE email = :email";
        $result = $db->prepare($sql);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()){
            return 'Пользователь с таким email уже существует';
        }
        return '';
    }

    public static function register($firstname,$lastname,$email,$password){
        $db = Db::getConnection();
        $sql = "INSERT INTO user (id,firstname,lastname,email,password) VALUES (NULL, :firstname, :lastname, :email, :password)";
        $result = $db->prepare($sql);
        $result->bindParam(':firstname',$firstname,PDO::PARAM_STR);
        $result->bindParam(':lastname',$lastname,PDO::PARAM_STR);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);


        return $result->execute();
    }

    public static function checkLoginError($email, $password){
        $db = Db::getConnection();
        $sql = "SELECT * FROM user WHERE email = :email";
        $result = $db->prepare($sql);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->execute();
        if(!$result->fetchColumn()){
            return 'Пользователь с таким email не зарегистрирован';
        }
        $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
        $result = $db->prepare($sql);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);
        $result->execute();
        if(!$result->fetchColumn()){
            return 'Неправильный email или пароль';
        }
        return '';
    }

    public static function auth($email){
        $db = Db::getConnection();
        $sql = "SELECT id FROM user WHERE email = :email";
        $result = $db->prepare($sql);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->execute();
        $id = $result->fetchColumn();

        session_start();

        $_SESSION['user_id'] = $id;

        header('Location: /');

    }

}