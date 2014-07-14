<?php
    class basecalculator
    {
        public $fnumber;
        public $snumber;

        function add_number()
        {
            return $this -> fnumber + $this -> snumber;
        }
        function sub_number()
        {
            return $this -> fnumber - $this -> snumber;
        }
        function mult_number()
        {
            return $this -> fnumber * $this -> snumber;
        }
        function div_number()
        {
            return $this -> fnumber / $this -> snumber;
        }

    }