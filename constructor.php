<?php 

class Student{
    public $name;
    public $age;
    public $id;

    public function __construct($name,$age,$id)
    {

        $this->name=$name;
        $this->age=$age;
        $this->id=$id;
        echo "My name is {$this->name} My Age is {$this->age} and My id is {$this->id}";
        
    }
}

$obj=new Student("jahid",23,181818);


?>