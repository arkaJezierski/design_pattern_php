<?php

namespace App\Src;

use App\Interfaces\Downloader;

class RealDownloader implements Downloader
{
    public function download(string $file): void
    {
        echo "Downloading file: $file\n";
    }
}
