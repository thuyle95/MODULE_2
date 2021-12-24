<?php
function bubbleSort($list){
    for ($i = 0; $i<count($list); $i++) {
        for($j = count($list) - 1; $j > $i; $j--) {
            if($list[$j] < $list[$j - 1]) {
                $temp = $list[$j - 1];
                $list[$j - 1] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    foreach($list as $key => $value) {
        echo $value .' ';
    }
}
$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
bubbleSort($list);