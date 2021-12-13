<?php
$arrays = [10, 4, 6, 7, 8, 6, 0, 0, 0, 0];
for ($i = 0; $i < count($arrays); $i++) {
    if ($arrays[$i] == 6) {
        array_splice($arrays, $i , 1);
    }
}
print_r($arrays);