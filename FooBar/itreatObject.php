<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/19/2016
 * Time: 11:05 PM
 */

class itreatObject {
public  $name="habib";
public  $first_name="Isims";
public  $last_name="IPIM";

      public  function has (){ return 'final';}
    public function iterateObject(){
        foreach ($this as $value){
            print( "$key => $value\n") ;
        }
    }
}
$it=new itreatObject();
$it->iterateObject();