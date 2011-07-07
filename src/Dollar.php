<?php

require_once 'Money.php';


class Dollar extends Money
{
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times($multiplier)
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
