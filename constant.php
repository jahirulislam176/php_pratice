<?php 

class Student{
    const Message="I am a Student";
}

echo Student::Message;
echo "</br>";

class GoodBye{
    const LEAVINGMESSAGE="Thankyou For Conformation";
    public function Bye(){
        echo self::LEAVINGMESSAGE;
    }
}

$goodBye=new GoodBye();
$goodBye->Bye();



?>

