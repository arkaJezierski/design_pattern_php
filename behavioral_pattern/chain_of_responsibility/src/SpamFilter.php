<?php

namespace App\Src;

class SpamFilter extends BaseFilter
{
    public function apply(string $message): void
    {
        if (str_contains(strtolower($message), 'buy now')) {
            print "Rejected by SpamFilter.\n";
            return;
        }

        print "Passed SpamFilter.\n";
        parent::apply($message);
    }
}
