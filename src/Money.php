<?php


abstract class Money
{
    protected $amount;

    protected $currency;


    public function equals(Money $money)
    {
        return $this->amount === $money->amount &&
            get_class($this) === get_class($money);
    }

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    public static function franc($amount)
    {
        return new Franc($amount);
    }

    public abstract function times($multiplier);

    public function currency()
    {
        return $this->currency;
    }
}
