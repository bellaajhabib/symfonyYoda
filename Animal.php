<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/17/2016
 * Time: 10:05 AM
 */

 abstract class Animal {
public $name;
public $color;
     public function describe(){
        // return $this->name.'is '.$this->color;
     }
     abstract  public function makeSound();
} 