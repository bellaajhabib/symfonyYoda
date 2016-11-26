<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 10/9/2016
 * Time: 8:05 PM
 */

class Cars {
    protected  $wheels=4;

    function gretting(){

        return 'Hello';
    }
}

$bmw=new Cars;
Class Trucks extends Cars {

public  function __construct(){
    var_dump(get_parent_class());
}
}
$trucks=new Trucks;
//$trucks->gretting();
