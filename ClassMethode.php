<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/10/2016
 * Time: 6:54 AM
 */

class ClassMethode {
public function  __construct(){
    echo 'Construct called';
}

    public function __destruct(){
        echo 'Destrutor Called';
    }
    public function  register(){
        echo 'User Regiter';
    }
}
$user=new ClassMethode();
$user->register();