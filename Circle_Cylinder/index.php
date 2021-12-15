<?php
//khởi tạo lớp Circle
class Circle{
    public $radius; //khởi tạo thuộc tính radius và color
    public $color;
    public function __construct($radius,$color) //hàm khởi tạo radius và color
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    // public function setRadius($radius) {
    //     $this->radius = $radius;
    // }
    // public function getRadius() {
    //     return $this->radius;
    // }
    // public function setColor($color) {
    //     $this->color = $color;
    // }
    // public function getColor() {
    //     return $this->color;
    // }
    //phương thức tính diện tích hình tròn
    public function getArea() {
        return pi()*pow($this->radius,2);

    }
    //phương thức __toString để trả về kq
    public function __toString() {
        return "Đây là hình tròn $this->color có bán kính bằng: $this->radius <br>";
    }
}

//khởi tạo lớp Cylinder
class Cylinder extends Circle{
    public $height;
    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height = $height;
    }

    // public function setHeight($height) {
    //     $this->height = $height;
    // }
    // public function getHeight() {
    //     return $this->height;
    // }

    public function S_Cylinder() {
        return (parent::getArea() * $this->height);
    }
    public function __toString() {
        return "Đây là hình trụ $this->color có chiều cao bằng: $this->height<br>";
    }
}
$obj = new Circle(5,'blue');
echo $obj->__toString();
echo "Hình tròn có diện tích bằng: ".$obj->getArea()."<br>";

$cylinder = new Cylinder(6,'yellow',6);
echo $cylinder->__toString();
echo "Hình trụ có thể tích bằng: ".$cylinder->S_Cylinder()."<br>";

