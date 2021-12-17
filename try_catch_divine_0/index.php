<?php
function calculate($x, $y)
{
    echo "Tổng = " . $x + $y . '<br>';
    echo "Hiệu = " . $x - $y . '<br>';
    echo "Tích = " . $x * $y . '<br>';
    if ($y == 0 || ( $x == 0 && $y == 0 )) {
        try {
            throw new Exception("Không thể chia cho số 0");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        echo "Thương = " . $x / $y . '<br>';
    }
}
calculate(10,5);
echo "<hr>";
calculate(5,0);
echo "<hr>";
calculate(0,5);
echo "<hr>";
calculate(0,0);