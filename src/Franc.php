<?php

require_once 'Money.php';


class Franc extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }

    public function currency()
    {
        return 'CHF';
    }
}
