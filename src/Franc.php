<?php

require_once 'Money.php';


class Franc extends Money
{
    private $currency;


    public function __construct($amount)
    {
        $this->amount = $amount;
        $this->currency = 'CHF';
    }

    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }

    public function currency()
    {
        return $this->currency;
    }
}
