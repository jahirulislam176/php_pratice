<?php 

trait msg1{
    public function test1(){
        echo "Test1";
    }
    public function test2(){
        echo "Test2";
    }
    public function test3(){
        echo "Test3";
    }
    public function test4(){
        echo "Test4";
    }
}

trait msg2{
    public function test5(){
        echo "Test5";

    }

}

class welcome{
    use msg1,msg2;
}

class message extends welcome{
    public function MessageTest(){
        echo "I am the Message Class";
    }
}

$obj=new message();
$obj->test1();

?>