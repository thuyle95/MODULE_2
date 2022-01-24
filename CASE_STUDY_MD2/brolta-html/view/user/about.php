<?php
include './layouts/header.php';
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
          <a class="navbar-brand " href="index.php"> Simple shop </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php"> About <span class="sr-only">(current)</span> </a>
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

  <!-- about section -->

  <section class="about_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img style="margin-left:110px; width:90%;" src="https://games-updates.org/wp-content/uploads/2020/02/161666.jpg" class="box_img" alt="about img">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box ">
            <div class="heading_container">
              <h2 class="">
                About Us
              </h2>
            </div>
            <p class="detail_p_mt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, orThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, orThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <?php
include 'layouts/footer.php';