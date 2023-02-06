<!DOCTYPE html>
<html>
<body>

<?php 

interface Animal{
    public function MakeSound();
}

class cat implements Animal{

    public function MakeSound()
    {
        echo "Meow";
    }
}

class dog implements Animal{
    public function MakeSound(){
        echo "Barging";
    }
}

class tiger implements Animal{
    public function MakeSound()
    {
        echo "tiger Barging";
    }
}

$obj1=new cat();
$obj2=new dog();
$obj3=new tiger();

$animals=array($obj1,$obj2,$obj3);

foreach($animals as $animal){
    $animal->MakeSound(); echo "</br>";
}
?>
 
</body>
</html>