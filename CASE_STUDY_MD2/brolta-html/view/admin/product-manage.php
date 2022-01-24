<?php
include_once '../../connection.php';
include './layouts/header.php';
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();          //kết nối đến cơ sở dữ liệu
$sql = "SELECT * FROM PRODUCT";    //lưu cú pháp vào biến sql
$query = $connect->prepare($sql);   //chuẩn bị
$query->execute();                  //thực hiện cú pháp
$products = array();               //khởi tạo mảng products
//trả về một số dữ liệu dưới dạng đối tượng
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($products, $result);    //thêm giá trị $result vào mảng $customers
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Product Manage</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Product manage</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List of products
                </div>
                <div class="card-body">
                    <table style="width:1150px;" class="table" id="datatablesSimple">
                        <thead style="text-align:center;">
                            <tr>
                                <th style="width:50px">ID</th>
                                <th style="width: 250px">Name</th>
                                <th style="width: 200px">Image</th>
                                <th style="width: 100px">Price</th>
                                <th>Description</th>
                                <th colspan="2"><a style="color:white" href="./add.php?acton=add" class="btn btn-primary">Add product</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- foreach sp -->
                            <?php
                            foreach ($products as $product) :
                            ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $product->PRODUCT_ID ?></td>
                                    <td style="text-align:center;"><?php echo $product->TENSANPHAM ?></td>
                                    <td style="text-align:center;"><img style="width:100px;" src='<?php echo $product->URL ?>'></td>
                                    <td style="text-align:center;"><?php echo $product->GIATIEN ?></td>
                                    <td><?php echo $product->MOTA ?></td>
                                    <td><a href="./edit.php?action=edit&id=<?php echo $product->PRODUCT_ID ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="./delete.php?action=delete&id=<?php echo $product->PRODUCT_ID ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                            <!-- end foreach -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php
    include './layouts/footer.php';
    ?>