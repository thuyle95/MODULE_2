<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include_once '../../connection.php';
include './layouts/header.php';
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();          //kết nối đến cơ sở dữ liệu
$sql = "SELECT * FROM CUSTOMER";    //lưu cú pháp vào biến sql
$query = $connect->prepare($sql);   //chuẩn bị
$query->execute();                  //thực hiện cú pháp
$customers = array();               //khởi tạo mảng customers
//trả về một số dữ liệu dưới dạng đối tượng
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($customers, $result);    //thêm giá trị $result vào mảng $customers
}
?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Order manage</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Order manage</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List of customers
                </div>
                <div class="card-body">
                    <table style="width:1150px;" class="table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th style="width:50px; text-align:center;">ID</th>
                                <th style="width: 250px; text-align:center;">Name</th>
                                <th style="width: 200px; text-align:center;">Phone</th>
                                <th style="width: 100px; text-align:center;">Email</th>
                                <th style="width: 100px; text-align:center;">Message</th>
                                <th style="width: 100px; text-align:center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form method="post">
                            <!-- foreach sp -->
                            <?php
                            foreach ($customers as $customer) :
                            ?>
                                    <tr>
                                    <input class="form-control" name="CUSTOMER_ID" type="hidden" value="<?php echo $customer->CUSTOMER_ID ?>">
                                        <td style="text-align:center;"><?php echo $customer->CUSTOMER_ID ?></td>
                                        <td style="text-align:center;"><?php echo $customer->CUSTOMER_NAME ?></td>
                                        <td style="text-align:center;"><?php echo $customer->CUSTOMER_PHONE ?></td>
                                        <td style="text-align:center;"><?php echo $customer->CUSTOMER_EMAIL ?></td>
                                        <td style="text-align:center;"><?php echo $customer->CUSTOMER_MESSAGE ?></td>
                                        <td style="text-align:center;"><?php echo $customer->ORDER_STATUS ?></td>
                                    </tr>
                                </form>
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