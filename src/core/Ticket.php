<?php

abstract class Ticket {

    public function __construct(protected float $price, protected string $seatNumber)
    {
    }

    public abstract function print(): void;
}
