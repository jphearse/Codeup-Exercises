<?php

class Rectangle
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    public function perimeter()
    {
        return 'The perimeter is: '. ((2 * $this->height) + (2 * $this->width)) . PHP_EOL;
    }

    public function area()
    {
        return 'The area is: '. $this->height * $this->width . PHP_EOL;
    }

}