<?php

class Cylinder
{
    public function getVolume($radius, $height): float|int
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        return $perimeter * $height + 2 * $baseArea;
    }
    
    public function getPerimeter($radius): float|int
    {
        return pi() * $radius * $radius;
    }
    
    public function getBaseArea($radius): float|int
    {
        return 2 * pi() * $radius;
    }
}