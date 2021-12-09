<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>

<body>
    <form action="#" method="post">
        First operand<br> <input type="number" name="first_num" value=""> <br><br>
        Operator: <select name="operator">
            <option>addition</option>
            <option>subtraction</option>
            <option>multiplication</option>
            <option>division</option>
        </select> <br> <br>
        Second operand<br> <input type="number" name="second_num" value=""> <br> <br>
        <input type="submit" value="Calculate" name="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";
       // $first_num = (isset($_REQUEST['first_num'])  && !empty($_REQUEST['first_num']))? $_REQUEST['first_num']:"";
       //toán tử 3 ngôi, kiểm tra nếu request tồn tài và không rỗng.
        $first_num = $_REQUEST['first_num'];
        $operator = $_REQUEST['operator'];
        $second_num = $_REQUEST['second_num'];
    }
    if ($operator == "addition") {
        echo 'Kết quả: '.$first_num + $second_num;
    }
    if ($operator == "subtraction") {
        echo 'Kết quả: '.$first_num - $second_num;
    }
    if ($operator == "multiplication") {
        echo 'Kết quả: '.$first_num * $second_num;
    }
    if ($operator == "division") {
        echo 'Kết quả: '.$first_num / $second_num;
    }
    ?>

</body>

</html>