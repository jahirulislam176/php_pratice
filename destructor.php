<?php 
class Fruit{

    public $name;
    public $color;


    public function __construct($name)
    {

        $this->name=$name;
        
    }

    public function __destruct()
    {
        echo "The Fruit Name is {$this->name}";
    }

  
}

$obj=new Fruit("Mango");

?>