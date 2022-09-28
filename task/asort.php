<?php
$input = [2, 9, 6, 5, 7, 10, 4, 1, 3, 8];

for($x=0; $x<count($input); $x++){
    for($y=$x+1; $y<count($input); $y++) {
        if($input[$x]>$input[$y]){
            $temp=$input[$x];
            $input[$x]=$input[$y];
            $input[$y] =$temp;
        }
    }
}

print_r($input);

?>