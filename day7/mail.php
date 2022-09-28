<?php
$to = "ammuamuthacs194@gmail.com";
$subject = "Raw Text";

$body = "Hi, This is testing msg";

$header = "From:sudhakarcivil923@gmail.com";
// $header = "MIME-version: 1.0\r\n";
// $header = "Content-type: tet/plain\r\n";


// $val = mail($to,$subject,$body, $header);

// if($val== true) {
//     echo "Mail send sucessfully....";
// } 
// else {
//     echo "Mail sending failed.....";
// }

if(mail($to,$subject,$body,$header)) {
    echo "Email send sucessfully";
} else {
    echo "Failed in sending Email";
}



?>