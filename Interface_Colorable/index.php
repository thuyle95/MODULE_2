<?php
include_once 'Circle.php';
include_once 'Square.php';
include_once 'Recangle.php';
$Shapes[0] = new Circle(10);
$Shapes[1] = new Rectangle(5,10);
$Shapes[2] = new Square(7);
foreach ($Shapes as $Shape) {
    echo 'Diện tích của '.$Shape->getName().' là: '.$Shape->calculateArea().'<br>';
    if ($Shape instanceof Square) {
        echo 'Square '. $Shape->howToColor().'<br>';
    }
}