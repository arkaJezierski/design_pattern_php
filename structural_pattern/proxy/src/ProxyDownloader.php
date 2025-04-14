<?php

namespace App\Src;

use App\Interfaces\Downloader;

class ProxyDownloader implements Downloader
{
    public function __construct(
        private Downloader $downloader,
        private bool $hasAccess
    ) {}

    public function download(string $file): void
    {
        if (!$this->hasAccess) {
            print "Access denied for file: $file\n";
            return;
        }

        print "Access granted.\n";
        $this->downloader->download($file);
    }
}
