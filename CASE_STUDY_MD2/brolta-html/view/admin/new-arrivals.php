<?php
include_once '../../connection.php';
include './layouts/header.php';
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();          //kết nối đến cơ sở dữ liệu
$sql = "SELECT * FROM NEW_ARRIVALS";    //lưu cú pháp vào biến sql
$query = $connect->prepare($sql);   //chuẩn bị
$query->execute();                  //thực hiện cú pháp
$products = array();               //khởi tạo mảng products
//trả về một số dữ liệu dưới dạng đối tượng
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($products, $result);    //thêm giá trị $result vào mảng $customers
}
if ($_POST && $_POST['NAME'] && $_POST['PRICE'] && $_POST['DES'] && $_POST['URL']) {
    $sql = "UPDATE NEW_ARRIVALS SET NAME ='" . $_POST['NAME'] . "',PRICE ='" . $_POST['PRICE'] . "',DES='" . $_POST['DES'] . "',URL='" . $_POST['URL'] . "' WHERE NEW_ARRIVALS_ID = '" . $_POST['NEW_ARRIVALS_ID'] . "'";
    $connect->exec($sql);
    header("Location: index.php");
}

?>

        <div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">New Arrivals Product Manage</h1>
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
                    <thead>
                        <tr>
                            <th style="width:50px; text-align:center;">ID</th>
                            <th style="width: 250px; text-align:center;">Name</th>
                            <th style="width: 200px; text-align:center;">Image</th>
                            <th style="width: 100px; text-align:center;">Price</th>
                            <th style="text-align:center;">Description</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- foreach sp -->
                        <?php
                        foreach ($products as $product) :
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $product->NEW_ARRIVALS_ID ?></td>
                                <td style="text-align:center;"><?php echo $product->NAME ?></td>
                                <td style="text-align:center;"><img style="width:100px;" src='<?php echo $product->URL ?>'></td>
                                <td style="text-align:center;"><?php echo $product->PRICE ?></td>
                                <td><?php echo $product->DES ?></td>
                                <td style="text-align:center;"><a href="./edit-new-arrivals.php?action=edit&id=<?php echo $product->NEW_ARRIVALS_ID ?>" class="btn btn-primary">Edit</a></td>
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