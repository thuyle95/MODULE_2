<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include_once '../../connection.php';
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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "DELETE FROM PRODUCT WHERE PRODUCT_ID = '" . $_GET['id'] . "'";
    $connect->exec($sql);
    header("Location: product-manage.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Delete page</title>
</head>
<br>
<h1 style="text-align: center;">Delete this product?</h1>
<br>
<form class="container" method="post">
    <div style="text-align: center" class="form-group">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a class="btn btn-primary" href="product-manage.php">Back</a>
    </div>
</form>