<?php
include './layouts/header.php';
include_once '../../connection.php';
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();          //kết nối đến cơ sở dữ liệu
$sql = "SELECT * FROM CART INNER JOIN PRODUCT ON CART.PRODUCT_ID = PRODUCT.PRODUCT_ID INNER JOIN CATEGORY ON PRODUCT.CATEGORY_ID = CATEGORY.CATEGORY_ID";    //lưu cú pháp vào biến sql

$query = $connect->prepare($sql);   //chuẩn bị
$query->execute();                  //thực hiện cú pháp
$products = array();               //khởi tạo mảng products
//trả về một số dữ liệu dưới dạng đối tượng
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($products, $result);    //thêm giá trị $result vào mảng $customers
}

$database = new db();
$connectsum = $database->connect();
$stmt = $connectsum->prepare('SELECT SUM(GIATIEN) AS value_sum FROM CART');
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$sum = $row['value_sum'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "DELETE FROM CART WHERE PRODUCT_ID = '" . $_POST['PRODUCT_ID'] . "'";
    $connect->exec($sql);
    header('Location: cart.php');
}
?>

<body>
    <div class="hero_area">
        <div class="hero_bg_box">
            <img src="https://icameheretodrinkmilkandkickass.files.wordpress.com/2016/01/counter-strike-go-logo-wallpaper-3.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand " href="index.php">Simple shop </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/brolta-html/view/user/about.php"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/brolta-html/view/user/product.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/brolta-html/view/user/cart.php"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/brolta-html/"> <i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- cart section  -->
        <style>
            * {
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
                text-shadow: rgba(0, 0, 0, .01) 0 0 1px
            }

            body {
                font-family: 'Rubik', sans-serif;
                font-size: 14px;
                font-weight: 400;
                background: #E0E0E0;
                color: #000000
            }

            ul {
                list-style: none;
                margin-bottom: 0px
            }

            .button {
                display: inline-block;
                background: #0e8ce4;
                border-radius: 5px;
                height: 48px;
                -webkit-transition: all 200ms ease;
                -moz-transition: all 200ms ease;
                -ms-transition: all 200ms ease;
                -o-transition: all 200ms ease;
                transition: all 200ms ease
            }

            .button a {
                display: block;
                font-size: 18px;
                font-weight: 400;
                line-height: 48px;
                color: #FFFFFF;
                padding-left: 35px;
                padding-right: 35px
            }

            .button:hover {
                opacity: 0.8
            }

            .cart_section {
                width: 100%;
                padding-top: 93px;
                padding-bottom: 111px
            }

            .cart_title {
                font-size: 30px;
                font-weight: 500
            }

            .cart_items {
                margin-top: 8px
            }

            .cart_list {
                border: solid 1px #e8e8e8;
                box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
                background-color: #fff
            }

            .cart_item {
                width: 100%;
                padding: 15px;
                padding-right: 46px
            }

            .cart_item_image {
                width: 133px;
                height: 133px;
                float: left
            }

            .cart_item_image img {
                max-width: 100%
            }

            .cart_item_info {
                width: calc(100% - 133px);
                float: left;
                padding-top: 18px
            }

            .cart_item_name {
                margin-left: 7.53%
            }

            .cart_item_title {
                font-size: 14px;
                font-weight: 400;
                color: rgba(0, 0, 0, 0.5)
            }

            .cart_item_text {
                font-size: 18px;
                margin-top: 35px
            }

            .cart_item_text span {
                display: inline-block;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                margin-right: 11px;
                -webkit-transform: translateY(4px);
                -moz-transform: translateY(4px);
                -ms-transform: translateY(4px);
                -o-transform: translateY(4px);
                transform: translateY(4px)
            }

            .cart_item_price {
                text-align: right
            }

            .cart_item_total {
                text-align: right
            }

            .order_total {
                width: 100%;
                height: 60px;
                margin-top: 30px;
                border: solid 1px #e8e8e8;
                box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
                padding-right: 46px;
                padding-left: 15px;
                background-color: #fff
            }

            .order_total_title {
                display: inline-block;
                font-size: 14px;
                color: rgba(0, 0, 0, 0.5);
                line-height: 60px
            }

            .order_total_amount {
                display: inline-block;
                font-size: 18px;
                font-weight: 500;
                margin-left: 26px;
                line-height: 60px
            }

            .cart_buttons {
                margin-top: 60px;
                text-align: right
            }

            .cart_button_clear {
                display: inline-block;
                border: none;
                font-size: 18px;
                font-weight: 400;
                line-height: 48px;
                color: rgba(0, 0, 0, 0.5);
                background: #FFFFFF;
                border: solid 1px #b2b2b2;
                padding-left: 35px;
                padding-right: 35px;
                outline: none;
                cursor: pointer;
                margin-right: 26px
            }

            .cart_button_clear:hover {
                border-color: #0e8ce4;
                color: #0e8ce4
            }

            .cart_button_checkout {
                display: inline-block;
                border: none;
                font-size: 18px;
                font-weight: 400;
                line-height: 48px;
                color: #FFFFFF;
                padding-left: 35px;
                padding-right: 35px;
                outline: none;
                cursor: pointer;
                vertical-align: top
            }
        </style>
        <div style="padding-top:-50px;" class="cart_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cart_container">
                            <div style="text-align:center;" class="text-light cart_title">Shopping Cart</div>
                            <div class="cart_items">
                                <ul class="cart_list">

                                    <?php
                                    if ($products == null) {
                                        echo '<h5 style="margin-left:-20px; margin-top:5px;"><a href="#" class="text-danger">Cart is empty!</a></h5>';
                                    }
                                    foreach ($products as $product) :
                                    ?>

                                        <li class="cart_item clearfix">
                                            <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                <div class="cart_item_name cart_info_col">
                                                    <div class="cart_item_title">Name</div>
                                                    <div style="width:250px;" class="cart_item_text"><?php echo $product->TENSANPHAM ?></div>
                                                </div>
                                                <div style="width:150px" class="cart_item_image"><img src="<?php echo $product->URL ?>" alt=""></div>

                                                <div class="cart_item_quantity cart_info_col">
                                                    <div class="cart_item_title">Quantity</div>
                                                    <div style="text-align:center;" class="cart_item_text">1</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col">
                                                    <div class="cart_item_title">Price</div>
                                                    <div style="text-align:center;" class="cart_item_text"><?php echo $product->GIATIEN ?></div>
                                                </div>
                                                <div class="cart_item_total cart_info_col">
                                                    <div class="cart_item_title">Total</div>
                                                    <div style="text-align:center;" class="cart_item_text"><?php echo $product->GIATIEN ?></div>
                                                </div>
                                                <form method="post">
                                                    <div class="cart_item_total cart_info_col">
                                                        <div class="cart_item_title">Options</div>
                                                        <div style="text-align:center;" class="cart_item_text">
                                                            <input class="form-control" name="PRODUCT_ID" type="hidden" value="<?php echo $product->PRODUCT_ID ?>">

                                                            <button style="margin-top:-15px; margin-right:-20px" type="submit" class="btn btn-danger">Remove</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title"><b>Order Total:</b></div>
                                    <div style="padding-right: 130px; color:red;" class="order_total_amount"><?php echo number_format($sum) ?></div>
                                </div>
                            </div>
                            <div class="cart_buttons"> <a href="product.php" type="button" class="button cart_button_clear">Continue Shopping</a> <a href="checkout.php" type="button" class="button cart_button_checkout">Check out</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end cart section -->
    </div>
    <!-- product section -->

    <?php
    include 'layouts/footer.php';
    ?>