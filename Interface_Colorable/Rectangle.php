<?php
class Rectangle {
    protected $height;
    protected $width;
    public function __construct($height,$width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->height*$this->width;
    }
    public function calculatePerimeter()
    {
        return 2*($this->height+$this->width);
    }
    public function getName()
    {
        return "Rectangle";
    }
}
