<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/23/2016
 * Time: 9:41 PM
 */

class users extends Controller {
    public function register(){
        $viemodel=new UserModel();
        $this->ReturnView($viemodel->register(),
            true);
    }
    public function login(){
        $viemodel=new UserModel();
        $this->ReturnView($viemodel->login(),
            true);
    }
    public function logout(){
        unset( $_SESSION['is_logged_in']);
        unset( $_SESSION['user_data']);
        header('Location: '.ROOT_URL);
    }
} 