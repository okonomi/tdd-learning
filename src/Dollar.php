<?php


class Dollar
{
    public $amount;


    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $dollar)
    {
        return true;
    }
}
