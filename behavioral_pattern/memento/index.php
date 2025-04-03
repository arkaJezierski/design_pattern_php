<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\TextEditor;
use App\Src\History;

// Creating Editor object,which gonna save actual data, and History object, which gonna save every change on object Editor
$editor = new TextEditor();
$history = new History();

// Adding value and save history
$editor->write("Hello");
$history->push($editor->save());

// Adding value and save history
$editor->write(" World!");
$history->push($editor->save());

// Adding value and show data
$editor->write(" This will be removed.");
$editor->show();

// Remove value and show data
$editor->restore($history->pop());
$editor->show();

// Remove value and show data
$editor->restore($history->pop());
$editor->show();
