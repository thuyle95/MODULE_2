<?php
$array = [
    [4, 6, 1, 6],
    [3, 8, 9, 1],
    [5, 55, 8, 91],
    [99, 92, 51, 61],
];
$max = $array[0][0];
for ($i = 1; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[0]); $j++) {
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }
    }
}
echo $max;
