<?php
    echo "<h2>The triangle using nested for loop-</h2>";
    for($i=1;$i<=10;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo "* ";
        }
        echo "<br/>";
    }
    
    echo "<h2>Even number from 1 to 100-</h2>";
    for($i=1;$i<=100;$i++)
    {
        if($i%2==0)
        {
            echo $i." ";
        }
    }
    echo "<br/>";
    echo "<h2>Even number from 1 to 100-</h2>";
    for($i=1;$i<=100;$i++)
    {
        if($i%2==1)
        {
            echo $i." ";
        }
    }