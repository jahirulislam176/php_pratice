<?php 
class A{

    public static function welcome(){
        echo "Hello";
    }

}

class B{
    
   public function message(){
     A::welcome();
   }

}

$obj=new B();
$obj->message();
echo "<br>";


class greeting{
    public static function welcome(){

        echo "Hello Static";

    }

    public function __construct()
    {
        self::welcome();
    }
}

new greeting();

echo "<br>";

class domain{
    protected static function getWebsite(){
        return "w3.com";
    }
}

class domain3 extends domain{
    public $wb;
    public function __construct()
    {
        $this->wb=parent::getWebsite();
        
    }
}

$domain3=new domain3();

echo $domain3->wb;


?>