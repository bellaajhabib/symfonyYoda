<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 10/9/2016
 * Time: 8:05 PM
 */

class Car {
    static   $wheem_count=8;
static public function wheel(){
return self::$wheem_count;
}

}
Class Trucks extends Car {

    public  function __construct(){
        var_dump(parent::wheel());
    }
}

$my_object=(new Trucks());
;

