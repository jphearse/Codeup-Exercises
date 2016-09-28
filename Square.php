<?php  

class Square extends Rectangle{

	public function __construct($height)
    {
        $this->height = $height;
        // $this->width  = $width;
    }

    public function perimeter()
    {
        return 'The perimeter is: '. (4 * $this->height) . PHP_EOL;
    }

     public function area()
    {
        return 'The area is: ' . ($this->height * 2) . PHP_EOL;
    }

}