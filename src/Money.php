<?php


namespace app;


class Money
{
    protected $amount;

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount;
    }
}