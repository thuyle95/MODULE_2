<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include_once './connection.php';
$db = new db();
$connect = $db->connect();
if ($_GET && $_GET['mahang']) {
    $sql = "SELECT * FROM product WHERE mahang = '" . $_GET['mahang'] . "'";
    $query = $connect->prepare($sql);
    $query->execute();
    $product = array();
    while ($result = $query->fetch(PDO::FETCH_OBJ)) {
        $product = $result;
    }
}

if ($_POST && $_POST['tenhang'] && $_POST['mahang'] && $_POST['loaihang']) {
    $sql = "UPDATE product SET tenhang ='" . $_POST['tenhang'] . "',loaihang ='" . $_POST['loaihang'] . "',gia ='" . $_POST['gia'] . "',soluong ='" . $_POST['soluong'] . "',ngaytao ='" . $_POST['ngaytao'] . "',mota ='" . $_POST['mota'] . "' WHERE mahang = '" . $_POST['mahang'] . "'";
    $connect->exec($sql);
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Danh sách mặt hàng</title>
</head>
<div class="col-12 col-md-12">
    <div class="col-12 container">
        <h1 style="text-align: center;">Cập nhật thông tin mặt hàng <?php echo $product->tenhang ?></h1>
    </div>
    <div class="container">
        <form method="post" action="edit.php">
            <input class="form-control" name="mahang" type="hidden" value="<?php echo $product->mahang ?>">
            <div>
                <p>Họ và tên</p>
                <input class="form-control" name="tenhang" value="<?php echo $product->tenhang ?>">
            </div>
            <div class="form-group">
                <p>Loại hàng</p>
                <select class="form-select" name="loaihang">
                    <option>Điện thoại</option>
                    <option>Điều hòa</option>
                    <option>Tủ lạnh</option>
                </select>
            </div>
            <div>
                <p>Giá</p>
                <input class="form-control" name="gia" value="<?php echo $product->gia; ?>">
            </div>
            <div>
                <p>Số lượng</p>
                <input class="form-control" name="soluong" value="<?php echo $product->soluong; ?>">
            </div>
            <div>
                <p>Ngày tạo</p>
                <input class="form-control" name="ngaytao" value="<?php echo $product->ngaytao; ?>">
            </div>
            <div>
                <p>Mô tả</p>
                <input class="form-control" name="mota" value="<?php echo $product->mota; ?>">
            </div>
            <br>
            <div>
                <input type="submit" value="Cập nhật" class="btn btn-primary" />
                <a href="index.php" class="btn btn-default">Quay lại</a>
            </div>
        </form>
    </div>