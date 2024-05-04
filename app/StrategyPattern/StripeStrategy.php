<?php

namespace App\StrategyPattern;

class StripeStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return 'Pay with Stripe';
    }
}
