<?php

namespace App\Src;

class NotificationService
{
    public function sendConfirmation(string $email): void
    {
        print "Confirmation email sent to $email.\n";
    }
}
