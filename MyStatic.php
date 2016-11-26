<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/1/2016
 * Time: 9:55 PM
 */

class MyStatic {
    const MIDDEL_NAME='Mature';
static $Age=10;
function  __construct(){
}
    static  function  habib($a) {

       self::$Age=    self::$Age+$a;
     return  self::$Age;
}
}
$a=4;
echo MyStatic::habib(1);
echo MyStatic::habib(2);