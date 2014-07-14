<?php
    class compoundCalculator
    {
        public $principle;
        public $rate;
        public $time;
        public $interval;

        function compound_interest()
        {
            $p = $this -> principle;
            $r = $this -> rate / 100;
            $n = $this -> time;
            $t = $this -> interval;

            $interest = $p * pow((1+$r/$t),($t*$n));

            return $interest;
        }
    }