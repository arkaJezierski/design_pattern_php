<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\RealDownloader;
use App\Src\ProxyDownloader;

// create proxy with permission
$proxy1 = new ProxyDownloader(new RealDownloader(), true);
$proxy1->download("report.pdf");

print "\n\n";

// create proxy without permission
$proxy2 = new ProxyDownloader(new RealDownloader(), false);
$proxy2->download("secret.docx");
