<?php
    class circleCalculation
    {
        var $radius;

        const pi = 3.1416;

        function diameter()
        {
            return $this -> radius * 2;
        }

        function perimeter()
        {
            return $this -> radius * 2 * constant('circleCalculation::pi');
        }

        function area()
        {
            return 2 * constant('circleCalculation::pi') * pow($this -> radius,2);
        }
    }