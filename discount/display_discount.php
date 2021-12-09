<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$price = $_REQUEST['price'];
$discount = $_REQUEST['discount'];
$result = $price * $discount * 0.01;
echo "Discount Amount: Lượng chiết khấu: ".$discount.'%';
echo "<br>";
echo "Discount Price: Giá sau khi đã được chiết khấu là: ".$result;
