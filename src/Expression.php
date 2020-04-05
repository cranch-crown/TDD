<?php


namespace app;


interface Expression
{
    public function reduce(string $to);
}