
<?php
$array = [
    [4, 6, 1, 6],
    [3, 8, 9, 1],
    [5, 55, 8, 91],
    [99, 92, 51, 61],
];
$sum;
$col = 1;
for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i][$col];
}
echo $sum;