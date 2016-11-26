<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 10/9/2016
 * Time: 8:05 PM
 */

class Car {
    private $door_count=4;
function get_values(){
    echo $this->door_count;
}
    function set_value(){
        $this->door_count=12;
    }
}
$my_object=(new Car());

$my_object->set_value();

$my_object->get_values();