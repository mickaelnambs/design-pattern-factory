<?php

namespace App\StrategyPattern;

class PaypalStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return 'Pay with Paypal';
    }
}
