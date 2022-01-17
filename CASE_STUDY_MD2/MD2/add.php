<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include './connection.php';
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$sql = "INSERT INTO product(tenhang, loaihang, gia, soluong, mota) VALUES('" . $_POST['tenhang'] . "','" . $_POST['loaihang'] . "','" . $_POST['gia']."','" . $_POST['soluong']."','" . $_POST['mota'] . "')";
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

<body>
    <div class="col-12 col-md-12">
        <div class="col-12">
            <h1>Thêm mặt hàng</h1>
        </div>
        <div class='container'>
            <form method="post">
                <div class="form-group">
                    <label>Tên hàng</label>
                    <input type="text" class="form-control" name="tenhang" placeholder="Nhập tên hàng" required>
                </div>
                <div class="form-group">
                    <label>Loại hàng</label>
                    <select class="form-select" name="loaihang">
                        <option>Điện thoại</option>
                        <option>Điều hòa</option>
                        <option>Tủ lạnh</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="gia" placeholder="Nhập địa chỉ" required>
                </div>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="text" class="form-control" name="soluong" placeholder="Nhập số lượng" required>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" class="form-control" name="mota" placeholder="Mô tả sản phẩm" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Nhập mặt hàng</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Thoát</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>