<?php

namespace App\Src;

class LengthFilter extends BaseFilter
{
    public function apply(string $message): void
    {
        if (strlen($message) > 100) {
            echo "Rejected by LengthFilter: Message too long.\n";
            return;
        }

        echo "Passed LengthFilter.\n";
        parent::apply($message);
    }
}
