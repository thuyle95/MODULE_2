<?php
class Stack {
    public $stack = [];
    public $limit;

    public function __construct($limit) {
        $this->limit = $limit;
    }
    public function push($item) {
        array_unshift($this->stack, $item);
    }
    public function pop() {
        array_shift($this->stack);
    }
    public function top() {
        return $this->stack[0];
    }
    public function isEmpty() {
        if (count($this->stack) == 0) {
            return true;
        }
            return false;
    }

}
$stack = new Stack(5);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->push(6);
$stack->push(7);
var_dump($stack->isEmpty());
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
var_dump($stack->isEmpty());

echo "<pre>";
print_r($stack);
