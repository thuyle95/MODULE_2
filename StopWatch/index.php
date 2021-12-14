<?php
//khởi tạo lớp StopWatch
class StopWatch {
    //khởi tạo 2 thuộc tính
    private $startTime;
    private $stopTime;

    //khởi tạo 2 phương thức để lấy giá trị start và stopTime
    function getStartTime() {
        return $this->startTime;
    }
    function getStopTime() {
        return $this->stopTime;
    }

    //khởi tạo 2 phương thức để đếm thời gian(microtime)
    function start() {
        $this->startTime = microtime(true);
    }
    function stop() {
        $this->stopTime = microtime(true);
    }

    //khởi tạo phương thức để lấy thời gian dừng - thời gian bắt đầu và in ra kết quả
    function getElapsedTime(){
        echo $this->stopTime - $this->startTime;
    }
}
//khởi tạo đối tượng stopwatch từ lớp StopWatch
$stopwatch = new StopWatch();
//gọi phương thức start
$stopwatch->start();
//usleep để thiết lập thời gian chờ
usleep(100000);
//gọi phương thức stop
$stopwatch->stop();
//gọi phương thức getElapseTime để trả về kết quả
$stopwatch->getElapsedTime();