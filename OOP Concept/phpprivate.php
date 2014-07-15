<?php
    class Person
    {
        private $name;

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }


    }

    $bappa = new Person;
    $bappa -> setName('aeroplane');
    echo $bappa -> getName();