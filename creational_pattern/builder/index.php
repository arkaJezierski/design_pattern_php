<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\BlogWebsiteBuilder;
use App\Src\ShopWebsiteBuilder;
use App\Src\WebsiteDirector;

print "--- Building Blog ---\n";
// Create BlogWebsiteBuilder which have WebsiteBuilder interface
$blogBuilder = new BlogWebsiteBuilder();
// Create WebsiteDirector which get blogBuilder object and run methods with it
$blogDirector = new WebsiteDirector($blogBuilder);
$blog = $blogDirector->build();
$blog->show();

print "\n--- Building Shop ---\n";
// Create ShopWebsiteBuilder which have WebsiteBuilder interface
$shopBuilder = new ShopWebsiteBuilder();

// Create WebsiteDirector which get shopBuilder object and run methods with it
$shopDirector = new WebsiteDirector($shopBuilder);
$shop = $shopDirector->build();
$shop->show();
