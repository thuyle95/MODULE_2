<?php
include_once '../../connection.php';
include './layouts/header.php';
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();          //kết nối đến cơ sở dữ liệu
$sql = "SELECT * FROM USER";    //lưu cú pháp vào biến sql
$query = $connect->prepare($sql);   //chuẩn bị
$query->execute();                  //thực hiện cú pháp
$users = array();               //khởi tạo mảng users
//trả về một số dữ liệu dưới dạng đối tượng
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($users, $result);    //thêm giá trị $result vào mảng $customers
}

if ($_POST && $_POST['USER_ID'] && $_POST['USERNAME'] && $_POST['ROLE']) {
    $sql = "UPDATE USER SET USER_ID ='" . $_POST['USER_ID'] . "',USERNAME ='" . $_POST['USERNAME'] . "',ROLE='" . $_POST['ROLE'] . "' WHERE USER_ID = '" . $_POST['USER_ID'] . "'";
    $connect->exec($sql);
    header("Location: user-manage.php");
}

?>


        <div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">User manage</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">User manage</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List of users
            </div>
            <div class="card-body">
                <table style="width:1150px;" class="table" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th style="width:50px; text-align:center;">ID</th>
                            <th style="width: 250px; text-align:center;">Username</th>
                            <th style="width: 200px; text-align:center;">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- foreach sp -->
                        <?php
                        foreach ($users as $user) :
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $user->USER_ID ?></td>
                                <td style="text-align:center;"><?php echo $user->USERNAME ?></td>
                                <td style="text-align:center;"><?php echo $user->ROLE ?></td>
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