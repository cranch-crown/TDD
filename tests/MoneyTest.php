<?php
use PHPUnit\Framework\TestCase;
use app\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        self::assertEquals(10, $five->amount);
    }
}