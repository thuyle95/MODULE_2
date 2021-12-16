<?php
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';
include_once 'Resizeable.php';
class ShapeResizeable implements Resizeable{
    public function resize($name, $newSize){
        $size = $name->calculateArea();
        return $size*$newSize/100 + $size;
    }
}