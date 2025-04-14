<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\User;

// Create base user object
$admin = new User("Alan", "admin");
$admin->display();

// Clone and customize User object
$editor = $admin->clone();
$editor->name = "John";
$editor->role = "user";

$editor->display();
