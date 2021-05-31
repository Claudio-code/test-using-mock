<?php

namespace Tests;

class Cart
{
    private DeliveryFeeCalculator $deliveryFeeCalculator;

    public function __construct(DeliveryFeeCalculator $deliveryFeeCalculator)
    {
        $this->deliveryFeeCalculator = $deliveryFeeCalculator;
    }

    public function getTotal(Itens $itens): int
    {
        $total = 0;
        foreach ($itens as $item) {
            $total += $item->getValue();
        }

        $fee = $this->deliveryFeeCalculator->calculateFee();

        return $total + $fee;
    }
}
