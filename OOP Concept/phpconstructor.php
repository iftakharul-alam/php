<?php
    class User
    {
        private $name;

        function __construct($name)
        {
            $this->name = $name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

    }

$bappa = new User('tiger');
echo $bappa -> getName();