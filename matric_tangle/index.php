<?php
$array = [
    [1, 3, 5, 7, 9],
    [0, 2, 4, 6, 8],
    [5, 4, 3, 2, 1],
    [1, 2, 3, 4, 5],
    [9, 8, 7, 6, 5],
];
$hang_ngang1; $hang_ngang2; $hang_ngang3; $hang_ngang4; $hang_ngang5; $hang_doc1; $hang_doc2; $hang_doc3; $hang_doc4; $hang_doc50; $duong_cheo1;
for ($i = 0; $i < count($array); $i++) {
    $duong_cheo1 += $array[$i][$i];
    for ($j = 0; $j < count($array[0]); $j++) {
        if ($i == 0) {
            $hang_ngang1 += $array[$i][$j];
        }
        if ($i == 1) {
            $hang_ngang2 += $array[$i][$j];
        }
        if ($i == 2) {
            $hang_ngang3 += $array[$i][$j];
        }
        if ($i == 3) {
            $hang_ngang4 += $array[$i][$j];
        }
        if ($i == 4) {
            $hang_ngang5 += $array[$i][$j];
        }
        if ($j == 0) {
            $hang_doc1 += $array[$i][$j];
        }
        if ($j == 1) {
            $hang_doc2 += $array[$i][$j];
        }
        if ($j == 2) {
            $hang_doc3 += $array[$i][$j];
        }
        if ($j == 3) {
            $hang_doc4 += $array[$i][$j];
        }
        if ($j == 4) {
            $hang_doc5 += $array[$i][$j];
        }
    }
}
echo "Hàng ngang có giá trị bằng: ".$hang_ngang1."<br>";
echo "Hàng ngang có giá trị bằng: ".$hang_ngang2."<br>";
echo "Hàng ngang có giá trị bằng: ".$hang_ngang3."<br>";
echo "Hàng ngang có giá trị bằng: ".$hang_ngang4."<br>";
echo "Hàng ngang có giá trị bằng: ".$hang_ngang5."<br>";
echo "Hàng dọc có giá trị bằng: ". $hang_doc1. "<br>";
echo "Hàng dọc có giá trị bằng: ". $hang_doc2. "<br>";
echo "Hàng dọc có giá trị bằng: ". $hang_doc3. "<br>";
echo "Hàng dọc có giá trị bằng: ". $hang_doc4. "<br>";
echo "Hàng dọc có giá trị bằng: ". $hang_doc5. "<br>";
echo "Hàng chéo chính có giá trị bằng: ".$duong_cheo1;
