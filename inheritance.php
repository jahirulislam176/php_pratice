<?php

class main{
    public function test(){
        echo "its a parent class test Function";
    }
}

class child extends main{
    public function test1(){
        echo "its a child class test1 Function";
    }
}

$obj=new child();

$obj->test();


class Fruit{

    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    public function intro(){
      echo "This is { $this->name } and the color name is { $this->color }";
    }
}

class Strawberry extends Fruit{

    public function strawberryFruits(){

        echo "its a Strwberry Fruits";

    }

}

$obj=new Strawberry("Mango","yellow");
$obj->intro();

?>