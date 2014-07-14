<?php
    class Person
    {
        private $first_name;
        private $middle_name;
        private $last_name;

        function __construct($middle_name, $last_name, $first_name)
        {
            $this -> setFirstName($first_name); //call this method for logic

            $this->middle_name = $middle_name;
            $this->last_name = $last_name;
            $this->first_name = $first_name;
        }


        public function setFirstName($first_name)
        {
            $this->first_name = $first_name;
        }


        public function getFirstName()
        {
            return $this->first_name;
        }


        public function setMiddleName($middle_name)
        {
            $this->middle_name = $middle_name;
        }


        public function getMiddleName()
        {
            return $this->middle_name;
        }



        public function setLastName($last_name)
        {
            $this->last_name = $last_name;
        }


        public function getLastName()
        {
            return $this->last_name;
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