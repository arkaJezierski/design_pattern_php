<?php

namespace App\Src;

use App\Interfaces\Filter;

abstract class BaseFilter implements Filter
{
    private ?Filter $next = null;

    public function setNext(Filter $filter): Filter
    {
        $this->next = $filter;
        return $filter;
    }

    public function apply(string $message): void
    {
        if ($this->next) {
            $this->next->apply($message);
        } else {
            print "Final message: \"$message\"\n";
        }
    }
}
