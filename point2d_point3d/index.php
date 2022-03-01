<?php
class Point2D {
    public $x;
    public $y;
    public $array;

    //hàm khởi tạo
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        $this->array[] = $x;
        $this->array[] = $y;
    }

    function getX() {
        return $this->x;
    }
 
    function getY() {
        return $this->y;
    }

    function setXY($x, $y) {
        $this->x = $x;
        $this->y = $y;
        return $this->array;
    }
    function getXY() {
        return $this->array;
    }
    function __toString() {
        return 'Đây là lớp 2D<br>';
    }
}

class Point3D extends Point2D {
    public $z;
    function __construct($x, $y, $z) {
        //gọi phương thức khởi tạo $x và $y từ lớp cha
        parent::__construct($x, $y);
        $this->z = $z;
        $this->array[] = $z;
    }
    function getZ() {
        return $this->z;
    }
    function setXYZ($x, $y, $z) {
        $this->array = [];
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        return $this->array;
    }
    function getXYZ() {
        return [$this->x, $this->y, $this->z];
    }
    function __toString() {
        return 'Đây là lớp 3D';
    }
}

$point2D = new Point2D(5, 10);
echo implode(" ",$point2D->array);
echo $point2D->__toString();

$point3D = new Point3D(5, 10, 15);
echo implode(" ",$point3D->array);
echo $point3D->__toString();


