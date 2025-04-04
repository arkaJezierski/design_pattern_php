<?php

namespace App\Src;

use App\Interfaces\Renderer;

class Circle extends Shape
{
    public function __construct(
        protected Renderer $renderer,
        private int $radius
    ) {
        parent::__construct($renderer);
    }

    public function draw(): void
    {
        $this->renderer->render("Circle", ['radius' => $this->radius]);
    }
}
