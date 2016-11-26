<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 10/9/2016
 * Time: 8:05 PM
 */

class Cars {
    public $wheels_count=4;
    private    $door_count=4;
    protected  $set_count=4;

    function car_detail(){

       echo $this->wheels_count;
       echo $this->door_count;
       echo $this->set_count;
    }
}
class Trucks extends Cars {

}
$bmw=new Trucks();
$bmw->car_detail();
