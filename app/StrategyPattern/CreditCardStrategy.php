<?php

namespace App\StrategyPattern;

class CreditCardStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return 'Pay with credit card';
    }
}
