<?php
class QuadraticEquation {
    private $a = 1;
    private $b = 3;
    private $c = 1;
    private $delta;
    function getA() {
        return $this->a;
    }
    function getB() {
        return $this->b;
    }
    function getC() {
        return $this->c;
    }
    function getDiscriminant(){
        $this -> delta =  ($this->b * $this->b - (4 * $this ->a * $this->c));
        return $this -> delta;
    }
    function getRoot1() {
        return (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this ->a);
    }
    function getRoot2() {
        return (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this ->a);
    }
    function getResult() {
        $this->getDiscriminant();
        if($this->delta > 0) {
            echo  $this->getRoot1().'<br>';
            echo  $this->getRoot2();
        }
        else if($this->delta == 0) {
            echo  $this->getRoot1().'<br>';
        }
        else {
            echo 'The equation has no roots';
        }
    }

}
$obj = new QuadraticEquation();
$obj -> getResult();



