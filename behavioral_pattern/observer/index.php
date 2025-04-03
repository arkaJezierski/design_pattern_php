<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Blog;
use App\Src\EmailSubscriber;
use App\Src\SlackSubscriber;

// Creating Blog object which hold some dane
$blog = new Blog();

// Creating new Observerable object which gonna check edition of object
$email = new EmailSubscriber();
$slack = new SlackSubscriber();

// Sending new object to class to save observed object
$blog->attach($email);
$blog->attach($slack);

// Publish new post and display value of observe object
$blog->publish("Observer Pattern in PHP");
