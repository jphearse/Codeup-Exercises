<?php  

require_once 'Rectangle.php';

class Square extends Rectangle{

	public function __construct($height)
    {
        // $this->height = $height;
        parent::__construct($height, $height);
        // $this->width  = $width;
    }

    public function perimeter() 
	{
		return 'The perimeter of the Square is: ' . (($this->getHeight() + $this->getHeight()) + ($this->getWidth() + $this->getWidth())) . PHP_EOL;
	}
	public function area() 
	{
		return 'The area of the Square is: ' . ($this->getHeight() * $this->getWidth()) . PHP_EOL;
	}


}