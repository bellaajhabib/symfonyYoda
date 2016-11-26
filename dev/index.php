<?php
session_start();
require 'config.php';
require'classes/Bootstrap.php';
require'classes/Controller.php';
require('classes/Model.php');
require'controllers/Messages.php';
require'controllers/home.php';
require'controllers/shares.php';
require'controllers/users.php';
require'models/home.php';
require'models/share.php';
require'models/user.php';
$bootrap= new BootStrap($_GET);
$controller=$bootrap->createController();

if($controller){
    $controller->executeAction();
}