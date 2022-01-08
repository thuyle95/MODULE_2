<!DOCTYPE html>
<html>

<head>
    <title>Shape display</title>
</head>

<body>

    <h1 style="color:green; padding-left: 100px;">Hiển thị hình ảnh</h1>

    <?php
    if (array_key_exists('button1', $_POST)) {
        button1();
    } else if (array_key_exists('button2', $_POST)) {
        button2();
    } else if (array_key_exists('button3', $_POST)) {
        button3();
    }
    function button1()
    {
        for ($i = 0; $i < 3; $i++) {
            echo "* * * * * * *<br>";
        }
    }
    function button2()
    {
        for ($j = 0; $j < 6; $j++) {
            for ($k = 0; $k < $j; $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    function button3()
    {
        for ($a = 5; $a > 0; $a--) {
            for ($b = 0; $b < $a; $b++) {
                echo '*';
            }
            echo "<br>";
        }
    }

    ?>

    <form method="post">
        <input type="submit" name="button1" class="button" value="Hình chữ nhật" />

        <input type="submit" name="button2" class="button" value="Tam giác vuông" />

        <input type="submit" name="button3" class="button" value="Tam giác vuông ngược" />
    </form>
    </head>

</html>