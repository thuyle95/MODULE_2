<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include_once 'userController.php';
include_once 'adminController.php';

class productController
{
    protected $model;
    public function __construct()
    {
        $this->model = new productModel();
    }

    public function index()
    {
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = '';
        }

        switch ($action) {
            case 'add':
                if (isset($_POST['TENSANPHAM'])) {
                    $this->model->add($_POST);

                    header("Location: index.php");
                }

                include_once '../view/admin/add.php';
                break;
                
            case 'detail':
                if (isset($_GET['id'])) {
                    $product = $this->model->detail($_GET['id']);
                }
                include_once '../view/admin/detail.php';
                break;

            case 'edit':
                if (isset($_GET['id'])) {
                    $product = $this->model->edit($_GET['id']);
                    include_once '../view/admin/edit.php';
                }
                if (isset($_POST['TENSANPHAM'])) {
                    $this->model->update($_POST);
                    header("Location: index.php");
                }
                break;

            case 'show_prd_edit':
                if (isset($_GET['id'])) {
                    $this->model->show_prd_edit($_POST);
                    header("Location: index.php");
                }
                break;

            case 'delete':
                if (isset($_GET['id'])) {
                    $this->model->delete($_GET['id']);
                    header("Location: index.php");
                }
            
            default:
                //$product = $this->model->getList();
                include_once 'view/user/login.php';
        }
    }
}
