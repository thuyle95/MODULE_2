<?php
error_reporting(-1);
ini_set('display_errors', 'On');

include '../../connection.php';
include '../user/layouts/header.php';
$db = new db();
$connect = $db->connect();
    if ($_GET && $_GET['id']) {
        $sql = "SELECT * FROM PRODUCT WHERE PRODUCT_ID = '" . $_GET['id'] . "'";
        $query = $connect->prepare($sql);
        $query->execute();
        $product = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $product = $result;
        }
    }
    if ($_POST && $_POST['TENSANPHAM'] && $_POST['GIATIEN'] && $_POST['MOTA']) {
        $sql = "UPDATE PRODUCT SET TENSANPHAM ='" . $_POST['TENSANPHAM'] . "',
        GIATIEN ='" . $_POST['GIATIEN'] . "',
        URL ='" . $_POST['URL'] . "',
        MOTA='" . $_POST['MOTA'] . "' WHERE PRODUCT_ID = '" . $_POST['PRODUCT_ID'] . "'";

        $connect->exec($sql);
        header("Location: product-manage.php");
    }

?>
<body>
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
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Product update</h4>
                    </div>
                    <div class="row mt-2">
                        <input class="form-control" name="PRODUCT_ID" type="hidden" value="<?php echo $product->PRODUCT_ID ?>">
                        <div class="col-md-6">
                            <label class="labels">Product name</label>
                            <input class="form-control" name="TENSANPHAM" value="<?php echo $product->TENSANPHAM ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Price</label>
                            <input class="form-control" name="GIATIEN" value="<?php echo $product->GIATIEN ?>">
                            <br>
                        </div>
                        
                        <div class="col-md-12">
                            <label class="labels">Product image(url)</label>
                            <input class="form-control" name="URL" value="<?php echo $product->URL ?>">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Descriptions</label>
                            <input class="form-control" name="MOTA" value="<?php echo $product->MOTA ?>">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <input style="float:left; width:125px;" type="submit" value="Update" class="btn btn-primary">
                        <a style="float:right; width: 125px;" href="product-manage.php" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>


</div>
</div>
</body>
