<?php

namespace App\Src;

use App\Interfaces\Documentable;
use App\Interfaces\Visitorable;

class Report implements Documentable
{
    public string $title;
    public string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function accept(Visitorable $visitor): void
    {
        $visitor->visitReport($this);
    }
}
