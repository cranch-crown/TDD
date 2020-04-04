<?php


namespace app;


class Franc
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $dollar): bool
    {
        return $this->amount === $dollar->amount;
    }
}