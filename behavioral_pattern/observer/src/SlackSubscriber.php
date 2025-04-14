<?php

namespace App\Src;

use App\Interfaces\Observerable;

class SlackSubscriber implements Observerable
{
    public function update(string $title): void
    {
        print "SlackSubscriber: Posting message to Slack about '$title'\n";
    }
}
