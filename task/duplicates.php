<?php
$input = [10, 20, 20, 30, 30, 20, 10,20];


for($x=0; $x<count($input); $x++) {
if ($input[$x]== $input[$x-1]) {
    continue;
}
echo "<pre>";
print_r($input[$x]);
echo "</pre>";
} 


?>