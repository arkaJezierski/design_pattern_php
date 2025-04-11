<?php

namespace App\Src;

class NotificationService
{
    public function sendConfirmation(string $email): void
    {
        echo "Confirmation email sent to $email.\n";
    }
}
