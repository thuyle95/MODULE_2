<?php
include_once ('Rectangle.php');
include_once ('Colorable.php');
class Square extends Rectangle implements Colorable{
    public function __construct($width)
    {
        parent::__construct($width,$width);
    }
    public function getName()
    {
        return "Square";
    }
    function howToColor() {
        return 'Color all four sides..';
    }
}
