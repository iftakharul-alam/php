<?php
    class Useri             //declare a class
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
        
        function getEmail()
        {
            return $this->email;
        }
    }
    
    //$user = new User();    //instantiate a object
    $user1 = new Useri();
    $user2 = new Useri();
    
    //var_dump($user);        //debug the user object
    
    //echo $user->name;     //accessing a property of a object
    
    echo $user1->getName(); //accessing a method of a object
    echo "<br/>";
    echo $user1->getEmail();
    
    echo "<br/>------------------------------------------------------<br/>";
    
    class User
    {
        protected function userAge()
        {
            return 'some value';
        }
        
    }
    
    class Person extends User
    {
        public function getUserAge()
        {
            return $this->userAge();
        }
    }
    
    $user = new Person();
    
    echo $user->getUserAge();
    
    echo $user->userAge();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    