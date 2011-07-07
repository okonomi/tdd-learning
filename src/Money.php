<?php


abstract class Money
{
    protected $amount;


    public function equals(Money $money)
    {
        return $this->amount === $money->amount &&
            get_class($this) === get_class($money);
    }

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    public abstract function times($multiplier);
}
