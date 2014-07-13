<?php
	class OfficeEmployee
	{
		public $id;
		public $name;
		public $salary;
                
                public function get_salary_with_bonus()
                {
                    if($this -> salary <= 10000)
                    {   
                        $bonus  = $this -> salary * .5;
                        return $this -> salary + $bonus;
                    }
                    
                    else if($this -> salary >= 10000 && $this -> salary <= 30000)
                    {   
                        $bonus  = $this -> salary * .3;
                        return $this -> salary + $bonus;
                    }
                    
                    else if($this -> salary >= 30000)
                    {   
                        $bonus  = $this -> salary * .2;
                        return $this -> salary + $bonus;
                    }
                    
                    
                }
	}