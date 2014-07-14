<?php
    class Person
    {
        public $first_name;
        public $middle_name;
        public $last_name;

        public function get_full_name()
        {
            return $this -> first_name.' '.$this -> middle_name.' '.$this -> last_name;
        }

        public function get_reverse_name()
        {
            $full_name = $this -> get_full_name();
            return strrev($full_name);
        }
    }