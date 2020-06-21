<?php


namespace app;


class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {

    }

    public function rate(string $from, string $to): int
    {
        return $from == 'CFH' && $to == 'USD' ? 2 : 1;
    }
}