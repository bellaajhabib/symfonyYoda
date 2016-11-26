<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/23/2016
 * Time: 9:41 PM
 */

class shares extends Controller {
    public function index(){
        $viemodel=new ShareModel();

        $this->ReturnView($viemodel->Index(),
            true);
    }
    public function add(){

        $viemodel=new ShareModel();
        $this->ReturnView($viemodel->add(),
            true);
    }
} 