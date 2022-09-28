<?php
    $input = [2, 9, 6, 5, 7, 10, 4, 1, 3, 8];
    $value=9;
    $bool=0;

    for($i=0; $i<count($input); $i++) {
        if($input[$i]==$value) {
        $bool=1;
        }
    }
    if($bool==1){
        echo "The value is present";
    }   else 
    {
        echo "The value is not present";
    }
    

?>