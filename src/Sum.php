<?php


namespace app;


class Sum implements Expression
{
    public $augend;
    public $addned;

    public function __construct(Money $augend, Money $addned)
    {
        $this->augend = $augend;
        $this->addned = $addned;
    }

    public function reduce(string $to): Money
    {
        $amount = $this->augend->amount + $this->addned->amount;
        return new Money($amount, $to);
    }
}