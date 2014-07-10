<?php
    echo "<h1>";
    function getGrade1($marks)
    {
        if($marks>69)
        {
            $grade='A+';
        }
        else if($marks>29)
        {
            $grade='A';
        }
        else
        {
            $grade='F';
        }
        return $grade;
    }
    echo "The grade is now    ".getGrade1(95); 
    
    echo "<br/>----------------------------------------<br/>";
    
    function printGrade($marks)
    {
       if($marks > 50)
       {
            echo 'A';  
       }
       else
       {
            echo 'F';
       }
       
       return;
    }
    
    printGrade(90);
    
    echo "<br/>----------------------------------------<br/>";
    
    function getGrade($marks = '')
    {
        if($marks>100)
        {
            return;
        }
        
       $grade = '';
       
       if($marks > 50)
       {
            $grade = 'A';  
       }
       else
       {
            $grade = 'F';
       }
       
       return $grade;
    }
    
    $grade = getGrade(70);
    
    function echoGrade($grade)
    {
        echo $grade;
    }
    
    echoGrade($grade);
    
    echo "<br/>----------------------------------------<br/>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    