<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class CartsTest extends TestCase
{
    public function testReturnCorrectCartTotal()
    {
        $itens = new Itens();
        $itens->add(new Item('Car', 2));
        $itens->add(new Item('macbook', 4));
        $itens->add(new Item('moto', 2));

        $delivery = \Mockery::mock(DeliveryFeeCalculator::class);
        $delivery->shouldReceive('calculateFee')->andReturn(0);
        $cart = new Cart($delivery);

        $total = $cart->getTotal($itens);
        $this->assertEquals(8, $total);
    }
}
