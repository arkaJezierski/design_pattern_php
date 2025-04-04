<?php

namespace App\Src;

use App\Interfaces\Renderable;

class MenuGroup implements Renderable
{
    private array $items = [];

    public function __construct(private string $title) {}

    public function add(Renderable $item): void
    {
        $this->items[] = $item;
    }

    public function render(int $depth = 0): void
    {
        print str_repeat("  ", $depth) . "+ " . $this->title . "\n";
        foreach ($this->items as $item) {
            $item->render($depth + 1);
        }
    }
}
