<?php
include_once 'Circle.php';
include_once 'Comparator.php';
class ComparatorCircle implements Comparator{
    public function compare($circle1,$circle2){
        $radius1 = $circle1->getRadius();
        $radius2 = $circle2->getRadius();
        if ($radius1>$radius2) {
            return 1;
        } else if ($radius1<$radius2) {
                return -1;
            } else {
                return 0;
            }
        }
    }