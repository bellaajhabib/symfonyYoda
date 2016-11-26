<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 8/27/2016
 * Time: 6:05 PM
 */

class MyPrivate {
//
    protected  $habib='k';
private $first_name;
private $last_name;
 public   function __construct(){
      $this->first_name="Bobe";
      $this->last_name="habib";

    }

}
class MyPrivate1 extends  MyPrivate {
//

    public   function __construct(){
       $this->habib;

    }

}
$persone01= new MyPrivate();

