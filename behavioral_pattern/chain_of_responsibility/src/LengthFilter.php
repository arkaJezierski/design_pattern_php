<?php

namespace App\Src;

class LengthFilter extends BaseFilter
{
    public function apply(string $message): void
    {
        if (strlen($message) > 100) {
            print "Rejected by LengthFilter: Message too long.\n";
            return;
        }

        print "Passed LengthFilter.\n";
        parent::apply($message);
    }
}
