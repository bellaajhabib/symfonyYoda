<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/8/2016
 * Time: 1:04 AM
 */

class A {
public $attribut_01;
public $attribut_02;
    public function __construct(){
        $this->attribut_01='attribut_01 from  class A';
        $this->attribut_02='$attribut_02';
    }
    final function  getValue(){

        return $this->attribut_01;
    }
}

class B extends A{
    public $attribut_01;
    public $attribut_02;
    public function __construct(){
        $this->attribut_01='attrbut_01 from  class B';
        $this->attribut_02='attrbut_02 class B';
    }

}
$a= new A();
echo $a->getValue();