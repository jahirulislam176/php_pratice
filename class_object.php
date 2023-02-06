<?php
//class are Nothing Without Object
class Fruit{

    public $name;
    public $color;

    public function set_name($name,$color){

        $this->name=$name;
        $this->color=$color;

        echo "{$this->name} {$this->color} ";

    }


}

$obj=new Fruit();
$obj->set_name("Mango","red");

?>