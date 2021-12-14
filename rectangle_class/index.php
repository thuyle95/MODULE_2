<?php

class Rectangle
{
    public int $width;
    public int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
        // tinh dien tich
        public function getArea(): int
        {
            return $this->width * $this->height;
        }
    
        //tinh chu vi
        public function getPerimeter(): int
        {
            return (($this->width + $this->height) * 2);
        }
    
        public function display(): string
        {
            return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }
    include_once "Rectangle.php";

$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width."<br>"; // 0utput: 10
echo $rectangle->height."<br>"; // 0utput: 20

$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->height."<br>"; // 0utput: 30
echo $rectangle->width."<br>"; // 0utput: 20
echo $rectangle->getPerimeter()."<br>"; // 0utput: 100
echo $rectangle->getArea()."<br>"; // Output: 600
echo ("Your Rectangle". $rectangle->display())."<br>";

