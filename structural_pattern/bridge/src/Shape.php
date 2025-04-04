<?php

namespace App\Src;

use App\Interfaces\Renderer;

abstract class Shape
{
    public function __construct(protected Renderer $renderer) {}

    abstract public function draw(): void;
}
