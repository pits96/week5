<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
//Require the autoload file
require_once ("vendor/autoload.php");

$f3 = Base::instance();

//Default route
$f3->route('GET /',function($f3){
    //Create variables in the F3 hive
    $f3->set('username','jshmo');
    $f3->set('password',sha1('Password01'));
    $f3->set('title','Working with Templates');
    $f3->set('color','Purple');
    $f3->set('radius',10);
    $f3->set('fruits',array('apple','orange','banana'));
    $f3->set('bookmarks',array('http://www.cnet.com',
                                'http://www.reddit.com/r/news',
                                'http://www.edition.cnn.com/sport'));
    $f3->set('desserts', array('chocolate'=> 'Chocolate Mousse','vanilla'=>'Vanilla Custard','strawberry'=>'Strawberry Shortcake'));
    $view = new Template();
    echo $view->render("views/info.html");
});
$f3->run();