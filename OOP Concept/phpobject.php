<?php
    class Person
    {
        public $name;


        public function setName($name)
        {
            $this->name = $name;
        }


        public function getName()
        {
            return $this->name;
        }

    }

    $bappa = new Person();

    $bappa -> setName("Sumon");

    echo $bappa -> getName();