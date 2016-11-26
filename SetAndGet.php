<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 8/27/2016
 * Time: 9:21 PM
 */

class SetAndGet {

    private $attr1;
    private $attr2;
    private $attr3;
    public function  __construct(){

        $this->attr1="No set attr1";
        $this->attr2="No ser attr2";
        $this->attr3="No set attr3";
    }
    public function setValue($attr1,$attr2,$attr3)
    {
        $this->attr1 = $attr1;
        $this->$attr2 = $attr2;
        $this->$attr3 = $attr3;

    }

        public function getValue(){

            return $this->attr1." ".$this->attr2." ".$this->attr3;
        }
}

$p= new SetAndGet();
$myValue=$p->getValue();
echo $myValue ;