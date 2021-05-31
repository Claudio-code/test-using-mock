<?php

namespace Tests;

class Item
{
    private string $productName;
    private int $value;

    public function __construct(string $productName, int $value)
    {
        $this->productName = $productName;
        $this->value = $value;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
