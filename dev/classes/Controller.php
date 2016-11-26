<?php

/**
 * Created by PhpStorm.
 * User: habib
 * Date: 9/22/2016
 * Time: 12:22 AM
 */
class Controller
{
    protected $action;
    protected $request;
    protected $habib="ez";
    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction()
    {
        var_dump($this->{$this->habib}());
        return $this->{$this->action}();
    }
    protected function returnView($viewmodel,$fullview){
        $view='views/'.get_class($this).'/'.$this->action.'.php';

        if($fullview){
            require('views/main.php');
        }else{
            require($view);
        }
    }
    public function ez()
    {
return 'io';
    }
}