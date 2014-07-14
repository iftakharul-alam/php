<?php

define('pi',3.1416);

echo "the value of 'Pi' outside of class is ".pi."<br/>";

class show_pi
{
    const PI = 3.1416;

    function diplayPi()
    {
        echo "the value of 'Pi' within class ".constant('show_pi::PI');
    }
}

$showPi = new show_pi();

$showPi -> diplayPi();