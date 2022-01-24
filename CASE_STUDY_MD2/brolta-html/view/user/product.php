<?php
include './layouts/header.php';
include_once '../../connection.php';
$db = new db();
$connect = $db->connect();
$sql = "SELECT * FROM PRODUCT";
$query = $connect->prepare($sql);
$query->execute();
$products = array();
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
  array_push($products, $result);
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
          <a class="navbar-brand " href="/brolta-html/view/user/index.php"> Simple shop </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="product.php">Products <span class="sr-only">(current)</span> </a>
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
  <div style="height:50px"></div>
  <!-- product section -->

  <section class="product_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container heading_center ">
        <h2 class="">
          All Weapons
        </h2>
        <p class="col-lg-8 px-0">
          If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
        </p>
      </div>
      <form method="post">
      <div class="row">
        <?php
        foreach ($products as $product) :
        ?>
          <div class="col-sm-6 col-md-3">
            <div class="box">
            <input type="hidden" class="form-control" name="URL" value="<?php echo $product->URL ?>">
            <input class="form-control" name="PRODUCT_ID" type="hidden" value="<?php echo $product->PRODUCT_ID ?>">
            <input class="form-control" name="TENSANPHAM" type="hidden" value="<?php echo $product->TENSANPHAM ?>">
            <input class="form-control" name="GIATIEN" type="hidden" value="<?php echo $product->GIATIEN ?>">
            <input class="form-control" name="MOTA" type="hidden" value="<?php echo $product->MOTA ?>">
            <input class="form-control" name="CATEGORY_ID" type="hidden" value="<?php echo $product->CATEGORY_ID ?>">

              <hr>
              <div class="img-box">
                <img style="height:100px;" src='<?php echo $product->URL ?>'>
              </div>
              <div class="detail-box">
                <h4>
                  <?php echo $product->TENSANPHAM ?>
                </h4>
                <h6 class="price">
                  <spanclass="new_price">
                    <?php echo $product->GIATIEN ?>
                  </spanclass=>
                  <span>$</span>
                </h6>
                <h6 class="price">
                  <?php ($product->CATEGORY_ID) ?>
                </h6>
                <tr>
                  <td>
                    <a name="PRODUCT_ID" href="./detail.php?action=detail&id=<?php echo $product->PRODUCT_ID ?>">
                      Details
                    </a>
                  </td>

                </tr>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- end -->
        </form>
      </div>
    </div>
  </section>

  <!-- product section ends -->
  <?php
  include 'layouts/footer.php';
