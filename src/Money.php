<?php


class Money
{
    protected $amount;

    protected $currency;


    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount &&
            $this->currency() === $money->currency();
    }

    public static function dollar($amount)
    {
        return new Money($amount, 'USD');
    }

    public static function franc($amount)
    {
        return new Money($amount, 'CHF');
    }

    public function times($multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency()
    {
        return $this->currency;
    }

    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
    }

    public function plus(Money $addend)
    {
        return new Money($this->amount + $addend->amount, $this->currency);
    }
}
