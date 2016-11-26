<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 8/25/2016
 * Time: 10:55 PM
 */

class MyUnset {
private $firt_name="M";
    private $lat_name="L";
    public function unSetAttributes(){
        unset($this->firt_name);
        unset($this->lat_name);
        echo "Attribute have been remove";
    }
    public function dispaly_attributes(){
        echo "First name:";
        echo $this->firt_name;
        echo "<br>";
        echo "Last name :";
        echo $this->lat_name;
        echo "<br>";
    }
}
$person= new MyUnset();
$person->dispaly_attributes();
echo "<br><br>";
$person->unSetAttributes();$person->dispaly_attributes();
echo "<br><br>";
