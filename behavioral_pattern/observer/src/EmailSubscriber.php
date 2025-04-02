<?php

namespace App\Src;

use App\Interfaces\Observerable;

class EmailSubscriber implements Observerable
{
    public function update(string $title): void
    {
        echo "EmailSubscriber: Sending email about new post '$title'\n";
    }
}
