<?php 

abstract class Car{
    public $name;
    abstract public function intro():string;
    abstract public function Students($name);

}

class volvo extends car{

    public function intro() :string {

        return "I am Volvo Extends The Car Class";
        

    }

    public function Students($name){

        echo "$name";

    }

    public function test(){

        echo "Hello I am test";

    }

}

$obj=new volvo();
echo $obj->intro();
// $obj->Students("jahid");
$obj->test();
?>