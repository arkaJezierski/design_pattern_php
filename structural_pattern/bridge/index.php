<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\SvgRenderer;
use App\Src\CanvasRenderer;
use App\Src\Circle;

// Creating Renderer objects with interface
$svg = new SvgRenderer();
$canvas = new CanvasRenderer();

// Creating Circle class with abstract class and with two different Renderer
$circle1 = new Circle($svg, 30);
$circle2 = new Circle($canvas, 45);

// Drawing Shapes by different Renderer
$circle1->draw();
$circle2->draw();
