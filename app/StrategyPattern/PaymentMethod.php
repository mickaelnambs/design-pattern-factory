<?php

namespace App\StrategyPattern;

interface PaymentMethod
{
    public function pay(): string;
}
