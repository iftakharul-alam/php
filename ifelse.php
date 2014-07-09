<?php
    $number=83;
    echo "<h1>The Grade Of the student is = ";
    if($number>79)
    {
        echo "A+";
    }
    else if($number>69)
    {
        echo "A";
    }
    else if($number>59)
    {
        echo "A-";
    }
    else if($number>49)
    {
        echo "B";
    }
    else if($number>39)
    {
        echo "C";
    }
    else if($number>32)
    {
        echo "D";
    }
    else
    {
        echo "F";
    }