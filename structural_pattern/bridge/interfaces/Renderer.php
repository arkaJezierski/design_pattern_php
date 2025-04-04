<?php

namespace App\Interfaces;

interface Renderer
{
    public function render(string $shapeName, array $props): void;
}
