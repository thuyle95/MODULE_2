<?php
include_once 'ComparatorCircle.php';
$Circle1 = new Circle('Circle 1', 4);
$Circle2 = new Circle('Circle 2', 5);
$Circle3 = new Circle('Circle 3', 2);
$ComparatorCircle = new ComparatorCircle();
echo $ComparatorCircle->compare($Circle1,$Circle2) . '<br>';
echo $ComparatorCircle->compare($Circle1,$Circle3) . '<br>';
$Circle3->setRadius(4);
echo $ComparatorCircle->compare($Circle1,$Circle3) . '<br>';