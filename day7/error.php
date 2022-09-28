<?php

// if(!file_exists("test.txt"))
// {
//     die("File not found");
// }
// else {
//     $afile =fopen("test.txt","r");
//     print "File open sucessfully";
// }
// fclose($afile);



//Error handler 

// error_reporting(E-ERROR);
// function handleError($errno, $errstr) {
//     echo "Error no: [$errno] $errstr"; 
//     echo "<br>";
//     echo "terminating script"; 
//     die;
// }
// set_error_handler("handleError");
// //$file=fopen("test.txt","r");
// $file=fopen("test1.txt","r");
// echo "file open successfully";
// fclose($file);




function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    die();
  }
  
  //set error handler
  set_error_handler("customError",E_USER_WARNING);
  
  //trigger error
  $test=2;
  if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
  }

?>
