<?php

namespace App\Src;

class ProfanityFilter extends BaseFilter
{
    public function apply(string $message): void
    {
        $filtered = str_ireplace(['badword'], '[censored]', $message);
        echo "ProfanityFilter cleaned the message.\n";
        parent::apply($filtered);
    }
}
