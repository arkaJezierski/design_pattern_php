<?php

namespace App\Src;

class Website
{
    private array $parts = [];

    public function addPart(string $part): void
    {
        $this->parts[] = $part;
    }

    public function show(): void
    {
        print "Website Structure:\n";
        foreach ($this->parts as $part) {
            print " - $part\n";
        }
    }
}
