<?php
// include '../model/adminModel.php';
class adminController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $objadminModel = new adminModel();
            $check = $objadminModel->checkLogin($username, $password);

            if ($check) {
                $_SESSION['admin'] = $check;
                unset($_SESSION['loi']);
                header('Location:./view/admin/');
            } 
        }
    }

}