<?php
include './layouts/header.php';
include '../../connection.php';
$db = new db();
$connect = $db->connect();
if ($_POST && $_POST['CUSTOMER_NAME'] && $_POST['CUSTOMER_PHONE'] && $_POST['CUSTOMER_EMAIL'] && $_POST['CUSTOMER_MESSAGE']) {
  $sql = "INSERT INTO CUSTOMER(CUSTOMER_NAME,CUSTOMER_PHONE,CUSTOMER_EMAIL,CUSTOMER_MESSAGE, ORDER_STATUS) VALUES ('" . $_POST['CUSTOMER_NAME'] . "',
         '" . $_POST['CUSTOMER_PHONE'] . "',
         '" . $_POST['CUSTOMER_EMAIL']. "',
         '" . $_POST['CUSTOMER_MESSAGE']. "',
         '" . "Processing". "')";
  $connect->exec($sql);
  $sql_clear = "DELETE FROM CART";
  $connect->exec($sql_clear);
  header("Location: loading-page.php");
}
?>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="../../images//hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand " href="index.php">simple shop </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Products</a>
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
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">

    <div class="container">
      <div class="heading_container">
        <h2>
          Check out
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container pr-md-3">
            <form method="post">
              <div>
                <input name="CUSTOMER_NAME" type="text" placeholder="Your Name" />
              </div>
              <div>
                <input name="CUSTOMER_PHONE" type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input name="CUSTOMER_EMAIL" type="email" placeholder="Your Email" />
              </div>
              <div>
                <input name="CUSTOMER_MESSAGE" type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button type="submit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="pl-md-3">
            <div class="map_container ">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <?php
  include 'layouts/footer.php';
