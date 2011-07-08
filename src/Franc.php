<?php

require_once 'Money.php';


class Franc extends Money
{
    public function __construct($amount, $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier, $this->currency);
    }
}
