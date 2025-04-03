<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\ChatRoom;
use App\Src\User;

// Creating ChatRoom object
$chat = new ChatRoom();


// Creating User objects
$john = new User("John");
$kim = new User("Kim");
$charlie = new User("Charlie");

// Register users in ChatRoom
$chat->registerUser($john);
$chat->registerUser($kim);
$chat->registerUser($charlie);

// Users send messages through the mediator
$john->send("Hello everyone!");
$kim->send("Hi Alice!");
$charlie->send("What's up?");
