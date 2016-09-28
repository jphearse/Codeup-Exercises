<?php

class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

   public function getHeight() 
    {
        return $this->height;
    }
    public function getWidth() 
    {
        return $this->width;
    }

    public function perimeter()
    {
        return 'The perimeter of the Rectangle is: '. ((2 * $this->height) + (2 * $this->width)) . PHP_EOL;
    }

    public function area()
    {
        return 'The area of the Rectangle is: '. $this->height * $this->width . PHP_EOL;
    }

}