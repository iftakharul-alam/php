<?php
    class Account
    {
        private $name;
        private $amount;
        private $balance;

        function __construct($name, $amount,$balance)
        {
            $this->amount = $amount;
            $this->balance = $balance;
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getBalance()
        {
            return $this->balance;
        }


        public function getAmount()
        {
            return $this->amount;
        }


        public function getName()
        {
            return $this->name;
        }

        public function deposit($amount)
        {
            $this -> balance = $this -> balance + $amount;
        }
        public function  withdraw($amount)
        {
            if($this -> balance - $amount >= 0)
            {
                $this -> balance = $this -> balance - $amount;
                return "withdrawn";
            }
            else
            {
                return "Insufficient balace";
            }

        }


    }
