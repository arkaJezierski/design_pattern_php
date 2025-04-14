<?php

namespace App\Src;

use App\Interfaces\Subjectable;
use App\Interfaces\Observerable;

class Blog implements Subjectable
{
    private array $observers = [];

    public function attach(Observerable $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observerable $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn($sub) => $sub !== $observer
        );
    }

    public function notify(string $title): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($title);
        }
    }

    public function publish(string $title): void
    {
        print "Blog post published: $title\n";
        $this->notify($title);
    }
}
