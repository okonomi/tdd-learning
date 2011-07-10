<?php

require_once 'Money.php';


class Dollar extends Money
{
    public function __construct($amount, $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times($multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }
}
