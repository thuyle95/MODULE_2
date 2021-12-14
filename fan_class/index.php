<?php
class Fan
{
    // public $SLOW = 1;
    // public $MEDIUM = 2;
    // public $FAST = 3;
    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = 'blue';
    //đặt và lấy giá trị thuộc tính speed
    function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    function getSpeed()
    {
        return $this->speed;
    }
    //đặt và lấy giá trị thuộc tính on

    function setOn($on)
    {
        $this->on = $on;
    }
    function getOn()
    {
        return $this->on;
    }

    //đặt và lấy giá trị thuộc tính radius
    function setRadius($radius)
    {
        $this->radius = $radius;
    }
    function getRadius()
    {
        return $this->radius;
    }

    //đặt và lấy giá trị thuộc tính color
    function setColor($color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }

    //phương thức toString để trả về giá trị
    function toString()
    {
        if ($this->getOn() == true) {
            echo 'Tốc độ của quạt là: ' . $this->getSpeed() . "<br>";
            echo 'Màu sắc của quạt là: ' . $this->getColor() . "<br>";
            echo 'Bán kính cánh quạt là: ' . $this->getRadius() . "<br>";
            echo 'fan is on' . '<br>' . '<br>' . '<br>';
        } else {
            echo 'fan is off';
        }
    }
}

    //khởi tạo đối tượng fan và truyền các giá trị vào
$fan = new Fan();
$fan->setSpeed(3);
$fan->setRadius(10);
$fan->setColor('yellow');
$fan->setOn(true);
$fan->toString($fan);


    //khởi tạo đối tượng fan2 và truyền các giá trị vào
$fan2 = new Fan();
$fan2->setSpeed(2);
$fan2->setRadius(5);
$fan2->setColor('blue');
$fan2->setOn(false);
$fan2->toString($fan2);
