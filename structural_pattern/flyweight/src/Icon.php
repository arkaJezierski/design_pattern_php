<?php

namespace App\Src;

class Icon
{
    public function __construct(
        public string $type,     // shared
        public string $color     // shared
    ) {}

    public function draw(int $x, int $y): void
    {
        echo "Drawing [$this->type:$this->color] at ($x, $y)\n";
    }
}
