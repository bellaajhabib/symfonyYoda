<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/17/2016
 * Time: 10:06 AM
 */
abstract class Animal {
    public $name;
    public $color;
    public function describe(){
         return $this->name.'is '.$this->color;
    }
    abstract  public function makeSound();
}

class Cat extends Animal {

    public function describe()
    {
        return parent::describe();
    }

    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        return 'Cat';
    }
}