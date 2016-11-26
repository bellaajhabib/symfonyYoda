<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/19/2016
 * Time: 11:25 PM
 */

class User {
public  static $minLenght=3;
public   $username;
    public static function vaildatePassword($password){

        if(strlen($password)>3){
            return true;
        }else{
            return false;
        }
    }
}
$user= new User();
var_dump( User::$minLenght++);
var_dump( User::$minLenght);