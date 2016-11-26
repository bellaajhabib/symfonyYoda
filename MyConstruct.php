<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 8/25/2016
 * Time: 10:55 PM
 */

class MyConstruct {
private $first_name="M";
    private $last_name="L";
    public function __construct(){
    $this->first_name="habib";
        $this->last_name="Bellaaj";

    }
    public function get_Last_person(){
   return $this->last_name;
    }
    public function get_First_person(){
        return  $this->first_name;
    }
}
$person= new MyConstruct();
$lastName=$person->get_First_person();
echo "<br><br>".$lastName;

