<?php

namespace App\Interfaces;

use App\Interfaces\DocumentVisitor;

interface Document
{
    public function accept(DocumentVisitor $visitor): void;
}
