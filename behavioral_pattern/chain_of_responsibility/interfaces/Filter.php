<?php

namespace App\Interfaces;

interface Filter
{
    public function setNext(Filter $filter): Filter;
    public function apply(string $message): void;
}
