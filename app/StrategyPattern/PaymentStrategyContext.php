<?php

namespace App\StrategyPattern;

class PaymentStrategyContext
{
    private PaymentMethod $strategy;

    public function __construct(string $paymentMethod)
    {
        $this->strategy = match ($paymentMethod) {
            'credit' => new CreditCardStrategy(),
            'paypal' => new PaypalStrategy(),
            'stripe' => new StripeStrategy(),
            default => throw new \InvalidArgumentException('You must pass in either credit, paypal, or stripe as the payment method')
        };
    }

    public function pay(): string
    {
        return $this->strategy->pay();
    }
}
