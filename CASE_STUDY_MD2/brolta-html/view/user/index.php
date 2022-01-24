<?php
error_reporting(-1);
ini_set('display_errors', 'On');
session_start();
include_once '../../connection.php';
include './layouts/header.php';
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();          //kết nối đến cơ sở dữ liệu
$sql = "SELECT * FROM NEW_ARRIVALS";    //lưu cú pháp vào biến sql
$query = $connect->prepare($sql);   //chuẩn bị
$query->execute();                  //thực hiện cú pháp
$products = array();               //khởi tạo mảng products
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
  array_push($products, $result);    //thêm giá trị $result vào mảng $customers
}
?>

<body>
  <div class="hero_area">
    <div style="padding-top: 70px" class="hero_bg_box">
<!-- slide -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://en.ephoto360.com/uploads/worigin/media/csgo-cover/ak47-2/thumb.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://en.ephoto360.com/uploads/worigin/media/csgo-cover/augaa/thumb.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://en.ephoto360.com/uploads/worigin/media/csgo-cover/sg553/thumb.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <!-- slide end -->    </div>
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
  </div>
  <!-- product section -->
  <section class="product_section">
    <div style="margin-top: -120px" class="container-fluid">
      <div class="heading_container heading_center ">
        <h2 class="">
          New Arrivals
        </h2>
        <p class="col-lg-8 px-0">
          If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you
          are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
        </p>
      </div>
      <div class="row">
        <!-- list show -->
        
        <?php foreach ($products as $product) : ?>
          <div style="position: relative;" class="col-sm-6 col-md-3">
            <div class="box">
              <div class="img-box">
                <img src='<?php echo $product->URL ?>' alt="">
              </div>
              <div class="detail-box">
                <h4>
                  <?php echo $product->NAME; ?>
                </h4>
            <h5>
              <?php echo $product->DES ?>
            </h5>

              </div>
            </div>
            <hr>
          </div>
        <?php endforeach ?>
      </div>
      <!-- kết thúc  -->
    </div>
  </section>

  <!-- product section ends -->
  <!-- about section -->
  <section class="about_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img src="https://phongvu.vn/cong-nghe/wp-content/uploads/2021/11/12.jpg" class="box_img" alt="about img">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box ">
            <div class="heading_container">
              <h2 class="">
                Our products
              </h2>
            </div>
            <p class="detail_p_mt">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate, laborum fugiat, perspiciatis at magni eligendi provident ducimus ab soluta reprehenderit qui porro adipisci voluptatem ullam odio aliquid id cupiditate?
            </p>
            <a href="product.php" class="">
              See all products
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>
<?php include_once '../user/layouts/footer.php';
