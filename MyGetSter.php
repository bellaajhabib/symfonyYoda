<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 8/25/2016
 * Time: 10:55 PM
 */

class MyGetSter {
private $first_name="M";
    private $last_name="L";
    public function __construct(){
    $this->first_name="habib";
        $this->last_name="Bellaaj";

    }
    public function set_full_name($last_name,$first_name){
        $this->last_name=$last_name;
        $this->first_name=$first_name;
    }
    public function get_full_name(){
        return   $this->last_name.''. $this->first_name;
    }
}
$person= new MyGetSter();
$lastName=$person->set_full_name('qqq','hhhhhhhhh');
echo "<br><br>".$person->get_full_name();

