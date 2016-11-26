<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 10/9/2016
 * Time: 8:05 PM
 */

class Car {
    protected  $na;
public function __construct(){

}
    public function __call($name ,$params ){
        echo $name;
    return $params;
}
}
$my_object=(new Car());

