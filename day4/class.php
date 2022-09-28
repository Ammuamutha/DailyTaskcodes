<?php

class Computer{
    public function brand(){
        echo "I hava a new computer";
    }
}

class Sum extends Computer
{
    public $number=1000;
    function addition($a,$b) {
        $result=$a+$b;

        echo "sum of addition: " . $result;
    }
    function division($a,$b) {
        $result=$a/$b;

        echo "sum of division: " . $result . "<br>";
        echo $this->brand();
    }
}
$sum=new Sum();

$sum->addition(10,7);
echo "<br>";
$sum->division(10,2);
echo "<br>";
echo $sum->number;

?>