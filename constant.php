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
    echo "<pre>";
    print_r($fruits);
    echo "</pre>";
    $array2D=array($cars,$fruits);
    echo "<br/>";
    echo "<pre>";
    print_r($array2D);
    echo "</pre>";
    
    echo "<br/>";
    echo $array2D[1]['b'];//array declaration  
    
    