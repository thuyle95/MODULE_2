<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include '../../connection.php';
include './layouts/header.php';
$db = new db();
$connect = $db->connect();
$sql = "SELECT * FROM PRODUCT INNER JOIN CATEGORY ON CATEGORY.CATEGORY_ID = PRODUCT.CATEGORY_ID WHERE PRODUCT_ID = '" . $_GET['id'] . "'";
$query = $connect->prepare($sql);
$query->execute();
$products = array();
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($products, $result);
}
if ($_POST && $_POST['PRODUCT_ID'] && $_POST['URL'] && $_POST['TENSANPHAM']) {
    $sql = "INSERT INTO CART (PRODUCT_ID,TENSANPHAM, GIATIEN, URL, MOTA,CATEGORY_ID) VALUES 
    ( '" . $_POST['PRODUCT_ID'] . "',
    '" . $_POST['TENSANPHAM'] . "',
     '" . $_POST['GIATIEN'] . "',
     '" . $_POST['URL'] . "',
     '" . $_POST['MOTA'] . "',
     '" . $_POST['CATEGORY_ID'] . "')";
    $connect->exec($sql);
    header('Location: product.php');
}
?>

<br>
<div class="container col-md-12">
    <?php
    foreach ($products as $product) :
    ?>
        <div class="col-12 col-md-12 container">
            <div class="col-12 ">
                <h1 style="text-align: center; margin-top: 30px;margin-left: -100px;">PRODUCT INFOMATION</h1>
            </div>
            <div class="container" style="margin-top:-50px;">
                <form method="post">
                    <div class="container rounded bg-white mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-3 border-right" style="margin-top:-70px;">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="width:250px;" class="rounded-circle mt-5" src="<?php echo $product->URL; ?>"><span class="font-weight-bold"><?php echo $product->TENSANPHAM ?></span><span class="text-black-50">Designed by SIMPLESHOP</span><span> </span></div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="p-3 py-5">

                                    <div class="row mt-2">
                                        <input class="form-control" name="PRODUCT_ID" type="hidden" value="<?php echo $product->PRODUCT_ID ?>">
                                        <input class="form-control" name="URL" type="hidden" value="<?php echo $product->URL ?>">
                                        <input class="form-control" name="CATEGORY_ID" type="hidden" value="<?php echo $product->CATEGORY_ID ?>">
                                        <div class="col-md-12">
                                            <label class="labels">Product name</label>
                                            <input class="form-control" name="TENSANPHAM" value="<?php echo $product->TENSANPHAM ?>" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">Price</label>
                                            <input class="form-control" name="GIATIEN" value="<?php echo $product->GIATIEN ?>" readonly>
                                            <br>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">Category</label>
                                            <input class="form-control" name="CATEGORY" value="<?php echo $product->LOAIHANG ?>" readonly>
                                            <br>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Descriptions</label>
                                            <input class="form-control" name="MOTA" value="<?php echo $product->MOTA ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mt-5 text-center">
                                        <a style="float:left; width: 125px;" href="product.php" class="btn btn-danger">Back</a>
                                    </div>
                                    <div class="mt-5 text-center">
                                        <button type="submit" style="float:right; width: 125px;" class="btn btn-primary">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        <?php endforeach; ?>
        </div>

        </html>