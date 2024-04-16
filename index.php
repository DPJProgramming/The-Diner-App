<?php
// This is controller

ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once ('vendor/autoload.php');

//instantiate the f3 base class
$f3 = Base::instance();

//define a default route
//https://dpjprogramming.greenriverdev.com/328/
$f3->route('GET /', function(){
    //echo '<h1> Hello Diner </h1>';

    //render view page
    $view = new Template();
    echo $view->render('views/home.html');
});

//breakfast menu
$f3->route('GET /menus/breakfast', function(){
    echo "<h1> Breakfast menu</h1>";
    echo "<ul>
        <li> Cereal</li>
        <li> Pancakes</li>
        <li> Oatmeal</li>
        <li> Biscuits</li>";
});

//lunch menu
$f3->route('GET /menus/lunch', function(){
    echo "<h1>Lunch menu</h1>";
    echo "<ul>
        <li> Sandwich</li>
        <li> Soup</li>
        <li> Hot Dog</li>
        <li> Pizza</li>";
});

//dinner menu
$f3->route('GET /menus/dinner', function(){
    echo "<h1>Dinner menu</h1>";
    echo "<ul>
        <li> Roast Beef</li>
        <li> Chicken Plate</li>
        <li> Curry</li>
        <li> Casserole</li>";
});

//run fat free
$f3->run();
?>