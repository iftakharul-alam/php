<?php
    
    function filmSummary($type)
    {   
        echo "<h1><u> Film Genres : $type<br/></u><h2>";
        $film = array(
            'genres' => array('Comedy','Tragedy','Action','Romance'),
            'film_title' => array('BIG','STAR WARS','TITANIC','FRENCH KISS'),
            'stars' => array('Bill Murry','Mark Hammel','Leonardo Decaprio','Cate Blanchell'),
        );
        if($type == $film['genres'][0])
        {
            echo 'Film Title : '.$film['film_title'][0].' ('.  str_replace(' ','-',strtolower($film['film_title'][0])).')<br/>';
            echo 'Stars : '.$film['stars'][0].' ('. str_replace(' ','-',  strtolower($film['stars'][0])).')<br/>';
            
        }
        
        else if($type == $film['genres'][1])
        {
            echo 'Film Title : '.$film['film_title'][1].' ('.  str_replace(' ','-',strtolower($film['film_title'][1])).')<br/>';
            echo 'Stars : '.$film['stars'][1].' ('.  str_replace(' ','-',strtolower($film['stars'][1])).')<br/>';
            
        }
        
        else if($type == $film['genres'][2])
        {
            echo 'Film Title : '.$film['film_title'][2].' ('.  str_replace(' ','-',strtolower($film['film_title'][2])).')<br/>';
            echo 'Stars : '.$film['stars'][2].' ('.  str_replace(' ','-',strtolower($film['stars'][2])).')<br/>';
            
        }
        
        else if($type == $film['genres'][3])
        {
            echo 'Film Title : '.$film['film_title'][3].' ('.  str_replace(' ','-',strtolower($film['film_title'][3])).')<br/>';
            echo 'Stars : '.$film['stars'][3].' ('.  str_replace(' ','-',strtolower($film['stars'][3])).')<br/>';
            
        }
        
    }
    
    filmSummary('Action');
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    