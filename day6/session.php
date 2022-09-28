<?php
session_start();

// Set session variables
$_SESSION["server"] = "localhost";  
$_SESSION["lap"] = "dell";

//unset ($_SESSION['lap']);

echo "Session variables are set. <br>";

echo "session server name is " . $_SESSION["server"] . ".<br>";
echo " lap name is " . $_SESSION["lap"] . ".<br>";

session_destroy();

echo $_SESSION['server']."=> ". $_SESSION['lap'];

$_SESSION['lap'];

$_SESSION = [];

echo $_SESSION['server']."=> ". $_SESSION['lap'];


?>




