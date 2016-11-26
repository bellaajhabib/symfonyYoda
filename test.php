<?php

class First {

    public $id=23;
    protected $name="JohneDoe";
    public function saySomthing($word){
        echo $word;
    }

}

class Seconde extends First {
    public function getName(){
        echo $this->name;
    }
}

$seconde= new Seconde();
$a="test";
echo $seconde->getName()." '\n' $a " ;
?>