<?php
    $start = 1;
    $end = 100;
    $summation = 0;
    while($start <= $end)
    {
        $summation += $start;
        $start++;
    }
    echo "Summation is $summation";