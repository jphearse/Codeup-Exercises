<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle1 = new Rectangle(6, 8);
echo $rectangle1->area();
echo $rectangle1->perimeter();

$square1 = new Square(5);
echo $square1->area();
echo $square1->perimeter();