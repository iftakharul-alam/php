<?php
    //example of for loop
    $start = 1;                     //initial variable
    $end = 100;                     //end variable
    $summation = 0;                 //Summation variable
    while($start <= $end)
    {
        $summation += $start;
        $start++;                   // start variable increment by 1
    }
    echo "Summation is $summation"; //output the result
    
    echo "<br/>------------------------<br/>";