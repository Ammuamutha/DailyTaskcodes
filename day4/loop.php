<?php
// for loop
// $a = 10;
// for ($a=1; $a <= 10; $a++) { 
//     echo "The value a is $a <br>";         
// }

//while loop
    // $b = 15;
    // while ($b <= 20) {
    //     echo "The value of b is $b <br>";
    //     $b++;
    // }

// do...while

// $c = 20;
// do {
//     echo "The value of C is $c <br>";
//     $c++;
// } while ($c <= 25);

// foreach statement

//$marks = array("Amutha"=>70, "Preetha"=>80, "priya"=>85);
// foreach ($marks as $key => $value) {
//     echo "name=" . $key . ", mark=" . $value;
//     echo "<br>";
// }

// $marks = array("Amutha","Preetha", "priya");
// foreach ($marks as $key) {
//     echo $key;  
//     echo "<br>";    
// }

// break 

// $x = 1;
// for ($x=1; $x<10; $x++) { 
//     if ($x==4) {
//         break;
//     }
//     echo "The number is: $x <br>";
// }

// continue

$x = 1;
for ($x=1; $x<10; $x++) { 
    if ($x==4) {
        continue;
    }
    echo "The number is: $x <br>";
}

?>