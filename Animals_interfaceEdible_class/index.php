<?php
abstract class Animal{
    abstract public function makeSound();
}

interface Edible{
    public function howtoEat();
}

abstract class Fruit implements Edible{
}

class Tiger extends Animal{
    public function makeSound()
    {
        return "Grrrrr";
    }
}

class Chicken extends Animal implements Edible{
    public function makeSound()
    {
        return "Chuck Chuck";
    }
    public function howtoEat()
    {
        return "Could be fried";
    }
}

class Apple extends Fruit{
    public function howtoEat()
    {
        return "Apple could be slided";
    }
}

class Orange extends Fruit{
    public function howtoEat()
    {
        return "Orange could be juiced";
    }
}
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';

    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . '<br>';
    }
}

$fruits[0] = new Apple();
$fruits[1] = new Orange();
foreach ($fruits as  $fruit) {
    echo $fruit->howtoEat() . '<br>';
}