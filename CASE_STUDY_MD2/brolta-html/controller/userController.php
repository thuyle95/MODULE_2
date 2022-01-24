<?php
include_once './model/userModel.php';
class userController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $objuserModel = new userModel();
            $usercheck = $objuserModel->checkLogin($username, $password);

            if ($usercheck) {
                $_SESSION['user'] = $usercheck;
                unset($_SESSION['loi']);
                header('Location:./view/user/index.php');
            } else {
                $_SESSION['loi'] = "Đăng nhập không thành công";
            }
        }
        include './view/user/login.php';
    }

}