<?php
    class User             //declare a class
    {
        var $name = 'go';
        var $email = 22.45;
        
        function getName()
        {
            
        }
    }
    
    $user = new User();    //instantiate a object
    
    var_dump($user);        //debug the user object
    
    echo $user->name;       //accessing a property of a object
    
    