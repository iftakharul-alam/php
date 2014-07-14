<?php
    class Person
    {
        private $first_name;
        private $middle_name;
        private $last_name;

        public function set_first_name($first_name)
        {   if(strlen($first_name) >= 2)
            {
                $this -> first_name = $first_name;
            }
        }

        public function get_first_name()
        {
            $this -> first_name;
        }

        public function set_middle_name($middle_name)
        {
            $this -> middle_name = $middle_name;
        }

        public function set_last_name($last_name)
        {
            $this -> last_name = $last_name;
        }

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