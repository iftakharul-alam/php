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
            return $this -> radius * 2 * pi();
        }

        function area()
        {
            return 2 * pi() * pow($this -> radius,2);
        }
    }