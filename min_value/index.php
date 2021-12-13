<?php
$array = [5,1,8,9,22,66,99,879];
$index = $array[0];
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < $index) {
        $index = $array[$i];
    }
}
echo $index;