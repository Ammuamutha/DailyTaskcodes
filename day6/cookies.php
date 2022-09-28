<?php
$cookie_name = "program";
$cookie_value =1234;

setcookie($cookie_name, $cookie_value, time()+(86400*10),"/");
if(!isset($_COOKIE[$cookie_name])) {                     // To set and delete cookie
    echo "Cookie is not set";
}                                                                            
else 
{
    echo "cookie is set and valus is : ".$_COOKIE[$cookie_name] ."<br>";
}

// Enable cookie

if(count($_COOKIE)>0) {
    echo "Cookie is Enabled";
} else
{
    echo "cookie is Not Enabled";
}

?> 
