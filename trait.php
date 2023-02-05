<?php 
//use traits in php 
trait welcome{
    
    public function msg(){
        echo "Hello I am traits";
    }
}



class test{
    use welcome;
}

$obj= new test();

$obj->msg();

echo "</br>";

//use multiple class in traits

trait traits1{

    public function test1(){

        echo "i am test 1";
    }
    public function test2(){

        echo "I am Test 2";
    }
    public function test3(){

        echo "I am Test 3";
    }
}

trait traits2{
    public function test4(){

        echo "Hello i am traits 2 function test4";
        
    }
    public function test5(){

        echo "Hello i am traits 2 function test5";
        
    }
}

class testTrait{
    use traits1,traits2;
}

$test=new testTrait();


$test->test1();
echo "</br>";
$test->test2();
echo "</br>";
$test->test3();
echo "</br>";
$test->test4();
echo "</br>";
$test->test5();


?>