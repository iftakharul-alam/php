<?php
    //math operator
    $x=100/(2*5);
    $y=100%(2*5);
    $z=100/2*5;
    $a1=0/5;
    $b=0%5;
    
    echo $x.'<br/>';
    echo $y.'<br/>';
    echo $z.'<br/>';
    echo $a1.'<br/>';
    echo $b.'<br/>';
    
    //Unary oparator
    $a = 2;
    echo $a++.'<br/>';//2
    echo $a--.'<br/>';//3
    echo ++$a.'<br/>';//3
    echo --$a.'<br/>';//2
    echo $a.'<br/>';//2
    echo $a.PHP_EOL;
    echo $a;
    echo "<br/>";
    $a=4;$b=2;
    echo ++$a * ($a++ + --$b).'<br/>';//30
    $d='0';
    echo (boolean)$d;
    $x=3;
    $y="3";
    if($x=$y)//assignment
    {
        echo "Hello Hi";
    }
    if($x==$y)//test for value
    {
        echo "Hello Hi";
    }
    if($x===$y)//test for type and value
    {
        echo "Hello";
    }
    
    
    