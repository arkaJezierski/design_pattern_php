<?php

namespace App\Src;

class IconFactory
{
    private array $icons = [];

    public function getIcon(string $type, string $color): Icon
    {
        $key = $type . '_' . $color;

        if (!isset($this->icons[$key])) {
            $this->icons[$key] = new Icon($type, $color);
            print "Created new Icon instance for [$key]\n";
        }

        return $this->icons[$key];
    }

    public function count(): int
    {
        return count($this->icons);
    }
}
