<?php

namespace App\Src;

use Iterator;

class ProductCollection
{
    private array $products = [];
    private int $position = 0;

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function current(): mixed
    {
        return $this->products[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->products[$this->position]);
    }
}
