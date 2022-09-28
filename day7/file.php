<!DOCTYPE html>
<html>
<body>

<?php

$file=fopen("file.txt","r") or die ("Unable to open my file");
    echo fread($file,filesize("file.txt")); //to read file

// echo fgets($file); // To read ah single line from a file

// while(!(feof($file))) {
//     echo fgets($file)."<br>";   
// }


fclose($file);




?>


</body>
</html>