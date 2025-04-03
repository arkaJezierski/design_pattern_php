<?php

namespace App\Src;

class Product
{
    public function __construct(
        public string $name,
        public float $price
    ) {}

    public function __toString(): string
    {
        return "{$this->name} - \${$this->price}";
    }
}
