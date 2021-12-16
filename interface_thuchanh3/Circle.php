<?php
class Circle{
    protected $name;
    protected $radius;
    public function __construct($name,$radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($newRadius)
    {
        $this->radius = $newRadius;
    }
}