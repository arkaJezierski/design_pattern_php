<?php

namespace App\Src;

use App\Interfaces\Document;
use App\Interfaces\DocumentVisitor;

class Report implements Document
{
    public string $title;
    public string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function accept(DocumentVisitor $visitor): void
    {
        $visitor->visitReport($this);
    }
}
