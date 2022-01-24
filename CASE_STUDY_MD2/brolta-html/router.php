<?php
    include_once 'connection.php';
    include_once 'controller/adminController.php';
    include_once 'controller/userController.php';
    include_once 'controller/productController.php';


    include_once 'model/productModel.php';
    include_once 'model/userModel.php';
    include_once 'model/adminModel.php';

    switch ($controller) {
        case 'user':
            $objController = new userController();
            break;
        case 'admin':
            $objController = new adminController();
            break;

        default:
            $objController = new productController();
            break;
    }
    switch ($action) {
        case 'login':
            $objController->login();

        break;
     

        // case 'logout':
        //     $objController->logout();
        //     break;
        default:
            include_once './view/user/index.php';
            break;
    }
?>