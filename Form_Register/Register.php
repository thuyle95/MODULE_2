<?php
error_reporting(-1);
ini_set('display_errors', 'On');
$requireds = [
    "email"     => 'Please fill your email',
    "psw"         => 'Please fill your password',
    "psw_repeat"  => 'Please repeat your password',
];
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arr = array(
        'email' => $_POST['email'],
        'psw' => $_POST['psw'],
        'psw_repeat' => $_POST['psw_repeat']
    );
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat'];
    foreach ($requireds as $field => $value) {
        if ($_POST[$field] == '') {
            $errors[$field] = $value;
        }
    }
    if (count($errors) === 0) {
        $json_users = file_get_contents('user.json');
        if ($json_users) {
            $users = json_decode($json_users);
        } else {
            $users = [];
        }
        $obj = new stdClass();
        $obj->id = time();
        $obj->email = $arr['email'];
        $obj->psw = $arr['psw'];
        $obj->psw_repeat = $arr['psw_repeat'];
        //push to users array
        $users[] = $obj;
        //convert to json string 
        $users = json_encode($users);
        file_put_contents('user.json', $users);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            padding: 16px;
            background-color: white;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        h1 {
            text-align: center;
        }

        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }
        a {
            color: dodgerblue;
        }
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <h1>Đăng ký</h1>
            <p>*Vui lòng điền các thông tin để đăng ký.</p>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập Email" name="email" id="email">
            <p style="color: red"><?php echo (isset($errors['email'])) ? $errors['email'] : ''; ?></p>

            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="psw" id="psw">
            <p style="color: red"><?php echo (isset($errors['psw'])) ? $errors['psw'] : ''; ?></p>


            <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
            <input type="password" placeholder="Nhập lại mật khẩu" name="psw_repeat" id="psw-repeat">
            <p style="color: red"><?php echo (isset($errors['psw_repeat'])) ? $errors['psw_repeat'] : ''; ?></p>

            <p>Bằng cách ấn vào nút đăng ký, bạn đã đồng ý <a href="#">Điều khoản</a> của chúng tôi.</p>
            <button type="submit" class="registerbtn">Đăng ký</button>
        </div>

        <div class="container signin">
            <p>Bạn đã có tài khoản? <a href="#">Đăng nhập</a>.</p>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>