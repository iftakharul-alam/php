<?php
    class circle
    {
        public $radius;

        function circle_area()
        {
            $area = 3.1416 * $this -> radius * $this -> radius;
            return $area;
        }
    }