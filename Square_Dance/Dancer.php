<?php
class Dancer{
    public $name;
    public $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}

//hàng chờ nam
$queueNam = new SplQueue();

//hàng chờ nữ
$queueNu = new SplQueue();

//tạo 1 số dancer nam và nữ vào hàng chờ
$queueNam->enqueue(new Dancer('Tuấn', 'Nam'));
$queueNam->enqueue(new Dancer('An', 'Nam'));
$queueNam->enqueue(new Dancer('A Tâm', 'Nam'));
$queueNam->enqueue(new Dancer('Thỳ', 'Nam'));

$queueNu->enqueue(new Dancer('Ka', 'Nữ'));
$queueNu->enqueue(new Dancer('Ngọc Anh', 'Nữ'));
$queueNu->enqueue(new Dancer('Nhi', 'Nữ'));

$pairs = [];
$nam_waiting = [];
$nu_waiting = [];
while (!$queueNu->isEmpty() || !$queueNam->isEmpty()){
    if(!$queueNu->isEmpty() && !$queueNam->isEmpty()){
        $pairs[] = $queueNam->dequeue()->name .' và '.$queueNu->dequeue()->name;
    }elseif($queueNu->isEmpty() && !$queueNam->isEmpty()){
        $nam_waiting[] = $queueNam->dequeue()->name;
    }elseif(!$queueNu->isEmpty() && $queueNam->isEmpty()){
        $nu_waiting[] = $queueNu->dequeue()->name;
    }
}

foreach ($pairs as $key => $value){
    echo "Cặp nhảy $value <br>";
}
echo 'Còn ' . count($nam_waiting) . ' dancer nam đang ở trong hàng chờ <br>';
echo 'Còn ' . count($nu_waiting) . ' dancer nữ đang ở trong hàng chờ';

// echo '<pre>';
//     print_r( $pairs  );
//     print_r( $nam_waiting  );
//     print_r( $nu_waiting  );
// echo '</pre>';