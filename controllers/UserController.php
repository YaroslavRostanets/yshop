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
            pri($_POST);


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
                if($value !== true ){
                    break;
                } else {
                    User::Register();
                }
            }
        }

        include_once ROOT.'/views/user/register.php';
        return true;
    }

    public function ActionLogin(){

    }
}


?>