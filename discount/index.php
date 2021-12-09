<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>

<body>
    <form action="display_discount.php" method="post">
        Product Description: Mô tả của sản phẩm<br> <input type="text" name="des" value=""> <br>
        List Price: Giá niêm yết của sản phẩm<br> <input type="number" name="price" value=""> <br>
        Discount Percent: Tỷ lệ chiết khấu (phần trăm)<br> <input type="number" name="discount" value=""> <br> <br>
        <input type="submit" value="Calculate Discount (Tính chiết khấu)">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $des                = $_POST["des"];
        $price              = $_POST["price"];
        $discount           = $_POST["discount"];
    }

    ?>
</body>

</html>