<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/17/2016
 * Time: 9:17 AM
 */

class User {
public $id;
private   $username;
public $password;
public function __construct($username,$password){
    $this->username=$username;
    $this->password=$password;

}
    public function __set($name,$value){
        echo $name;
        return $name;
    }
    public function __get($username){
        return $this->password;
    }
public function register(){
    echo "User Registered";
}
    public function login($username,$password){
        $this->auth_user($username,$password);
    }
    public function auth_user(){
       echo $this->username.' is authenticated';
    }
    public  function __destruct(){
        //
    }

}
$op=new User('habib','123');
$op->use=10;
$op->r=10;
echo $op->username;