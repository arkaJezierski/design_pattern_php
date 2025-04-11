<?php

namespace App\Src;

class Map
{
    public function __construct(
        private IconFactory $factory
    ) {}

    public function drawMap(): void
    {
        $this->factory->getIcon("tree", "green")->draw(1, 1);
        $this->factory->getIcon("tree", "green")->draw(2, 2);
        $this->factory->getIcon("rock", "gray")->draw(5, 5);
        $this->factory->getIcon("tree", "green")->draw(3, 7);
        $this->factory->getIcon("rock", "gray")->draw(8, 8);
    }
}
