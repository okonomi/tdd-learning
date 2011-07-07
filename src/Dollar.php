<?php

require_once 'Money.php';


class Dollar extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function currency()
    {
        return 'USD';
    }
}
