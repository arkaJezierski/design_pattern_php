<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Blog;
use App\Src\EmailSubscriber;
use App\Src\SlackSubscriber;

$blog = new Blog();

$email = new EmailSubscriber();
$slack = new SlackSubscriber();

$blog->attach($email);
$blog->attach($slack);

$blog->publish("Observerable Pattern in PHP");
