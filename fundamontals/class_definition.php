<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 10/9/2016
 * Time: 8:05 PM
 */

class Car {
public function __construct(){

}
}
$my_class=get_declared_classes();
foreach ($my_class as $key=>$value){
    #Code
    echo $value.'<br>';
}
