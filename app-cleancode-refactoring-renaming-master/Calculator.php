<?php
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($firstNum, $secondNum, $operator)
    {
        switch ($operator) {
            case ADDITION:
                return $firstNum + $secondNum;
            case SUBTRACTION:
                return $firstNum - $secondNum;
            case MULTIPLICATION:
                return $firstNum * $secondNum;
            case DIVISION:
                if ($secondNum != 0) {
                    return $firstNum / $secondNum;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}