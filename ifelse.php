<?php
    $number=73;
    echo "The Grade Of the student is = ";
    if($number>=80)
    {
        echo "A+";
    }
    else if(79>=$number&&$number>=70)
    {
        echo "A";
    }
    else if(69>=$number&&$number>=60)
    {
        echo "A-";
    }
    else if(59>=$number&&$number>=50)
    {
        echo "B";
    }
    else if(49>=$number&&$number>=40)
    {
        echo "C";
    }
    else if(39>=$number&&$number>=34)
    {
        echo "D";
    }
    else
    {
        echo "F";
    }