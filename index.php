<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
//Require the autoload file
require_once ("vendor/autoload.php");

$f3 = Base::instance();

//Default route
$f3->route('GET /',function(){
    $view = new Template();
    echo $view->render("views/info.html");
});
$f3->run();