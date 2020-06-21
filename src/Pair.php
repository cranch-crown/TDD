<?php

namespace app;

class Pair
{
    private $from;
    private $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(object $object): bool
    {
        $pair = $object; //ここでPairにキャスト
        return $this->from === $pair->from && $this->to === $object->to;
    }

    public function hashCode(): int
    {
        return 0;
    }
}
