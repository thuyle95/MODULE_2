<?php
class Circle {
    protected $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return 2*pi()*$this->radius;
    }
    public function getName()
    {
        return "Cirlce";
    }
}