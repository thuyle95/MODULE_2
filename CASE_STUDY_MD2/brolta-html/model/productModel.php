<?php
class ProductModel
{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }
    public function getList()
    {
        $sql = "SELECT * FROM PRODUCT";    
        $query = $this->connect->prepare($sql);    
        $query->execute();                  
        $products = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            array_push($products, $result); 
        }
        return $products;
    }

    public function detail($id)
    {
        $sql = "SELECT PRODUCT_ID, MAHANG,  TENSANPHAM,  GIATIEN, MOTA, URL FROM PRODUCT WHERE PRODUCT_ID = '" . $id . "'";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $product = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $product = $result;
        }

        return $product;
    }

    public function add($data)
    {
        $sql = "INSERT INTO PRODUCT(MAHANG, TENSANPHAM, GIATIEN, MOTA, URL) VALUES('" . $data['MAHANG'] . "','" . $data['TENSANPHAM'] . "','" . $data['GIATIEN'] . "','" . $data['MOTA']."','" . $data['URL'] . "')";
        //thực hiện cú pháp được lưu ở biến $sql
        $this->connect->exec($sql);
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM PRODUCT WHERE PRODUCT_ID = '" . $id . "'";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $product = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $product = $result;
        }
        return $product;
    }
    public function show_prd_edit($id) {
        $sql = "SELECT * FROM NEW_ARRIVALS WHERE NEW_ARRIVALS_ID = '".$id ."'";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $products = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $product = $result;
        }
        return $product;
    }

    public function update($data)
    {
        $sql = "UPDATE PRODUCT SET MAHANG ='" . $data['MAHANG'] . "',TENSANPHAM ='" . $data['TENSANPHAM'] . "',GIATIEN ='" . $data['GIATIEN'] . "',MOTA ='" . $data['MOTA'] . "' WHERE ID = '" . $data['ID'] . "'";
        $this->connect->exec($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM PRODUCT WHERE PRODUCT_ID = '" . $id . "'";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $product = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $product = $result;
        }
        return $product;
    }

    public function connect()
    {
        $hostname = 'localhost';
        $db_name = 'simplehouse';
        $username = 'root';
        $password = '';
        $dsn = "mysql:host=$hostname; dbname=$db_name";

        try {
            $connect = new PDO($dsn, $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (PDOException $e) {
            echo 'Kết nối thất bại: ' . $e->getMessage();
        }
    }
}
