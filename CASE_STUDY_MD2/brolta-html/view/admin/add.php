<?php
error_reporting(-1);
ini_set('display_errors', 'On');
//incluce_once file connection để kết nối add.php đến cơ sở dữ liệu
include_once '../../connection.php';
include '../user/layouts/header.php';
$db = new db();
$connect = $db->connect();
if ($_POST && $_POST['TENSANPHAM'] && $_POST['GIATIEN'] && $_POST['URL'] && $_POST['MOTA']) {
    $sql = "INSERT INTO PRODUCT (TENSANPHAM, GIATIEN, URL, MOTA,CATEGORY_ID) VALUES ('" . $_POST['TENSANPHAM'] . "','" . $_POST['GIATIEN'] . "','" . $_POST['URL'] . "','" . $_POST['MOTA'] . "','".$_POST['CATEGORY_ID'] . "')";   
    $connect->exec($sql);
    header("Location: product-manage.php");
}
?>
<div style="width:700px" class="col-12 col-md-12 container">
    <div class="col-12">
        <br>
        <h2 style="text-align: center;">ADD NEW PRODUCT</h2>
    </div>
    <div class="container">
        <form class="row mt-2 container border border-dark" method="post">
            <div class="form-group col-md-6">
                <label>Product name</label>
                <input type="text" class="form-control" name="TENSANPHAM" placeholder="Product name" required>
            </div>
            <div class="form-group col-md-6">
                <label>Price</label>
                <input type="text" class="form-control" name="GIATIEN" placeholder="Price of product" required>
            </div>
            <div class="form-group col-md-12">
                <!-- image upload -->
                <label>Image</label>
                <input type="text" class="form-control" name="URL" placeholder="Product url" required>
                <!-- end of image upload -->
            </div>
            <div class="form-group col-md-12">
                <select class="form-select form-control" name="CATEGORY_ID">
                    <option value ="1">1 <label>- Rifle</label></option>
                    <option value ="2">2 <label>- Knife</label></option>
                    <option value ="3">3 <label>- SMG</label></option>
                    <option value ="4">4 <label>- Heavy</label></option>
                    <option value ="5">5 <label>- Pistol</label></option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Descriptions</label>
                <input type="text" class="form-control" name="MOTA" placeholder="Product description" required>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Add product</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>

        </form>
    </div>

</div>