<?php
    //constant
    define('PI',3.14);
    echo PI;
    echo "<br/>";
    //Array
    $cars = array('toyota','ferari','audi');
    echo gettype($cars);
    $cars['t']='Aston Martin';
    echo "<br/>";
    echo "<pre>";
    print_r($cars);//for printing array use print_r
    echo "</pre>";
    
    $fruits=array('a'=>'apple','b'=>'banana');
    $fruits['']='rose';
    print_r($fruits);
    
    