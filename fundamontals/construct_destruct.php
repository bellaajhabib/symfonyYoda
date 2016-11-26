<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 10/16/2016
 * Time: 5:25 PM
 */

class Cars {
public $wheel_count=4;
static $door_count=4;
    function __construct(){
        echo '-----';
      // echo $this->wheel_count;
        echo self::$door_count++;
        echo '<br>';
    }
    function $(){
    return $this;
}
    function __destruct(){
        echo self::$door_count=0;
        echo '<br> ';
    }
}
//$bmw=new Cars();
$merceds=new Cars();
var_dump($merceds);