<?php
 
 //indexed array 

 $numbers = array(1,3,4,2,'Sparkout',8,7.9,6,5);

 print_r ("$numbers[5] <br>"); // to print the index value of 5 (o/p is 8)
 print_r ("$numbers[6] <br>");
 print_r ($numbers[4]);

echo '<pre>';       
 print_r ($numbers);    
 echo '</pre>';
 

 //Associative array: key and value

 $a = array (
    'pid' => 001,
    'pname' => 'Pencil',
    'price' => 10

 );

 foreach($a as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
 }

 echo '<pre>';
 print_r ($a); 
 echo '</pre>';

 $age['Amutha'] = "26";
 $age['Abi'] = "29";
 $age['Priya'] = "24";


echo '<pre>';
 print_r ($age); 
 echo '</pre>';

 $age = array("Amu"=>"26", "sakthi"=>"17", "priya"=>"24");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

foreach($age as $age1){
    echo "<pre>";
    print_r($age1);
    echo "</pre>";
}

// Multidimentional Array:

$list = array(
    array('id' => 001,
    'name'=> 'Amutha',
    'department' => 'IT',

), 
array (
    'id' => 002,
    'name'=> 'Abi',
    'department' => 'CS',
),
array (
    'id' => 003,
    'name'=> 'Priya',
    'department' => 'IT',
),
array (
    'id' => 004,
    'name'=> 'Moni',
    'department' => 'CS',
)
); 

 echo '<pre>';
 print_r ($list);
 echo '</pre>'; 

 echo $list[3]['name'];
 echo "<br>";
 echo $list[2]['id'];
 echo "<br>";

        foreach ($list[3] as $key=> $val) {
        echo $val. '<br>';

 }
?>  