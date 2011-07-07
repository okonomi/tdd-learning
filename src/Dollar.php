<?php

require_once 'Money.php';


class Dollar extends Money
{
    private $currency;

    public function __construct($amount)
    {
        $this->amount = $amount;
        $this->currency = 'USD';
    }

    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function currency()
    {
        return $this->currency;
    }
}
