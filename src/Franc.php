<?php

require_once 'Money.php';


class Franc extends Money
{
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times($multiplier)
    {
        return Money::franc($this->amount * $multiplier);
    }
}
