<?php

namespace App\Src;

use App\Interfaces\Observerable;

class SlackSubscriber implements Observerable
{
    public function update(string $title): void
    {
        echo "SlackSubscriber: Posting message to Slack about '$title'\n";
    }
}
