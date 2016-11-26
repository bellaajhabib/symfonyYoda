<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/23/2016
 * Time: 12:33 AM
 */

class Home extends Controller {
public function index(){
    $viemodel=new HomeModel();
    $this->ReturnView($viemodel->Index(),
        true);
}
} 