<?php
    class User             //declare a class
    {
        var $name = '';
        var $email = '';
        
        function __construct($name='FTFL',$email='go$go.com') 
        {
            $this->name = $name;
            $this->email = $email;
        }
        
        function getName()
        {
           return $this->name; 
        }
    }
    
    $user = new User();    //instantiate a object
    $user1 = new User('to','00');
    $user2 = new User();
    
    //var_dump($user);        //debug the user object
    
    //echo $user->name;     //accessing a property of a object
    
    echo $user1->getName(); //accessing a method of a object
    echo "<br/>------------------------------------<br/>";
    echo $user2->getName();
    