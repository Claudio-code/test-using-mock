<?php

namespace Tests;

class DeliveryFeeCalculator
{
    public function calculateFee(): int
    {
        $fee = file_get_contents('https://www.random.org/integers/?num=10&min=1&max=6&col=1&base=10&format=plain&rnd=new');

        return (int)$fee;
    }
}
