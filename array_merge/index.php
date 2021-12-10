<?php
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);
$results = array_merge($array1, $array2);
foreach ($results as $result) {
    echo $result;
}
