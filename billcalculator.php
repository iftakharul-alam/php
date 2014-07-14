<?php

class bill_calculator
{
    public $rice;
    public $vegetable;
    public $fish;
    public $meat;
    public $vat;

    function gross_bill()
    {
        global $total_gross;
        global $total_vat;

        $rice_bill = $this ->rice * 20;
        $vegetable_bill = $this -> vegetable * 30;
        $fish_bill = $this -> fish * 80;
        $meat_bill = $this -> meat *120;

        $total_vat = ($rice_bill + $vegetable_bill + $fish_bill + $meat_bill) * $this -> vat / 100;

        $total_gross = $rice_bill + $vegetable_bill + $fish_bill + $meat_bill;

        return $total_gross;
    }

    function payable_bill()
    {
        global $total_gross;
        global $total_vat;

        $payable_amount = $total_gross - $total_vat;
        return $payable_amount;
    }
}

$bill = new bill_calculator();
