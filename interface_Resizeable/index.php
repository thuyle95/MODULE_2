<?php
include_once 'ShapeResizeable.php';
$Shapes[0] = new Circle(10);
$Shapes[1] = new Rectangle(5,10);
$Shapes[2] = new Square(7);
$ShapeResizeable = new ShapeResizeable();
foreach ($Shapes as $Shape) {
    echo 'Diện tích ban đầu của '.$Shape->getName().' là: '.$Shape->calculateArea().'<br>';
    echo 'Diện tích sau khi tăng lên 50% là: '.$ShapeResizeable->resize($Shape, 50).'<br><br>';
}