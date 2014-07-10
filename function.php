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
    
    
    function echoGrade($marks)
    {
        $grade = getGrade($marks);
        echo $grade;
    }
    
    echoGrade(40);
    
    echo "<br/>----------------------------------------<br/>";
    
    
    
    
    
    
    function filmSummary($type)
    {   
        $film = array(
            'genres' => array('comedy','tragedy','action','romance'),
            'film_title' => array('Big','Star Wars','Titnic','French Kiss'),
            'stars' => array('Bill Murry','Mark Hammel','Leonardo Decaprio','Cate Blanchell'),
        );
        if($type == $film['genres'][0])
        {
            echo 'Film Title : '.$film['film_title'][0].'<br/>';
            echo 'Stars : '.$film['stars'][0].'<br/>';
            echo 'Slug : '.strtolower($film['stars'][0]).'<br/>';
        }
        
        else if($type == $film['genres'][1])
        {
            echo 'Film Title : '.$film['film_title'][1].'<br/>';
            echo 'Stars : '.$film['stars'][1].'<br/>';
            echo 'Slug : '.strtolower($film['stars'][1]).'<br/>';
        }
        
        else if($type == $film['genres'][2])
        {
            echo 'Film Title : '.$film['film_title'][2].'<br/>';
            echo 'Stars : '.$film['stars'][2].'<br/>';
            echo 'Slug : '.strtolower($film['stars'][2]).'<br/>';
        }
        
        else if($type == $film['genres'][3])
        {
            echo 'Film Title : '.$film['film_title'][3].'<br/>';
            echo 'Stars : '.$film['stars'][3].'<br/>';
            echo 'Slug : '.strtolower($film['stars'][3]).'<br/>';
        }
        
    }
    
    filmSummary('romance');
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    