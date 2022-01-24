<?php
include_once 'connection.php';
include_once 'controller/productController.php';
include_once 'controller/adminController.php';
include_once 'controller/userController.php';
$controller = new userController();
$controller->login();



if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'admin';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

include_once 'router.php';
