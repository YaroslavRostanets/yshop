<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 30.06.2017
 * Time: 23:01
 */
class UserController {

    public function ActionRegister(){
        $firstname = '';
        $lastname = '';
        $email = '';

        $errors = array(
            'firstNameError' => '',
            'emailError' => '',
            'passwordError' => ''
        );
        if(isset($_POST['submit'])){


            $errors['firstNameError'] = User::checkName($_POST['firstname']);
            $errors['emailError'] = User::checkEmail($_POST['email']);
            $errors['passwordError'] = User::checkPassword($_POST['password'],$_POST['confirm_password']);

            foreach ($errors as $error => $value){
                if ($value !== true) {
                    $varName = strtolower( str_replace('Error','',$error) );
                    ${$varName} = $_POST[$varName];
                }
            }
            foreach ($errors as $value){
                if($value !== '' ){
                    break;
                }
            }

            $errorFlag = implode($errors);

            if($errorFlag === ''){
                $password = $_POST['password'];
                $lastname = $_POST['lastname'];
                $userIsRegistred = User::Register($firstname,$lastname,$email,$password);
            }
        }

        include_once ROOT.'/views/user/register.php';
        return true;
    }

    public function ActionLogin(){
        if(isset($_SESSION['user_id'])){
            header('Location: /user/edit');
        }

        $email = '';
        $password = '';

        $errors = array(
            'loginError' => ''
        );

        if(isset($_POST["submit"])){
            $errors['loginError'] = User::checkLoginError($_POST['email'],$_POST['password']);

            if($errors['loginError'] == ''){
                User::auth($_POST['email']);
            }
        }

        include_once ROOT.'/views/user/login.php';
        return true;
    }

    public function ActionLogout() {
        if(isset($_SESSION['user_id'])){
            unset($_SESSION['user_id']);

            header('Location: /user/login');
        }
    }

    public function ActionEdit() {
        $errors = array(
            'firstNameError' => '',
            'lastNameError' => '',
            'emailError' => ''
        );
        if($_SESSION['user_id']){
            $user = User::getUserById($_SESSION['user_id']);

            if(isset($_POST["submit"])){
                pri($errors);
                $errors['firstNameError'] = User::checkName($_POST['firstname']);
                $errors['lastNameError'] = User::checkLastName($_POST['lastname']);
                $errors['emailError'] = User::checkEmailFormat($_POST['email']);

                $user['firstname'] = $_POST['firstname'];
                $user['lastname'] = $_POST['lastname'];
                $user['email'] = $_POST['email'];

                foreach ($errors as $key => $error){
                    if ($error != '') {
                        break;
                    } else {
                        unset($errors[$key]);
                    }
                }
                if(empty($errors)){
                    $isUserUpdate = User::updateUser($user['firstname'],$user['lastname'],$user['email']);
                    if($isUserUpdate){
                        header('Loading: /');
                    }

                }
            }

            include_once ROOT.'/views/user/edit_user.php';
        } else {

            header('Location: /user/login');
        }




        return true;
    }

    public function ActionPassword() {
        if($_SESSION['user_id']){
            $user = User::getUserById($_SESSION['user_id']);
            include_once ROOT.'/views/user/edit_password.php';
        } else {

            header('Location: /user/login');
        }



        return true;
    }
}


?>