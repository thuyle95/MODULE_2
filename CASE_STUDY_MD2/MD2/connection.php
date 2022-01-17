<?php
error_reporting(-1);
ini_set('display_errors', 'On');
class db {
    public function connect() {
        $hostname = 'localhost';
        $db_name = 'MD2';
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
