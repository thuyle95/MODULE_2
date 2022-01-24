<?php
class userModel
{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }
    public function checkLogin($username, $password)
    {
        $sql = "SELECT * FROM USER WHERE USERNAME = '$username' AND PASSWORD = '$password' AND ROLE = 'user'";
        $query = $this->connect->query($sql);
        $query->setFetchMode(PDO::FETCH_OBJ);
        $row = $query->fetch();
        if(isset($row)){
            return $row;
        }else{
            return false;
        }
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
