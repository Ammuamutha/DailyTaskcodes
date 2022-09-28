<?php
$to = "ammuamuthas194@gmail.com";
$subject = "Text mail with HTML and CSS";


$body =  "<table style='border-collapse: collapse; border:#cc solid 1p;'>";

$body .= "<tr><td colspan='2' >
         <img src='https://".$_SERVER['SERVER_NAME']."/img1.jpg' height='50'/>
         </td> <tr>";

$body .= "<tr> <th style= 'padding: 8px; text-align:right;
                background-color=#21618c; color: White; border: #ccc solid 1px; 
                font-size:20px;'> Name </th>

            <th style= 'padding: 8px; text-align:right;
            background-color=#21618c; color: White; border: #ccc solid 1px; 
            font-size:20px;'> Description </th></tr>";

$body .="<tr><td>Amutha </tr></td>";            


$body .= "<tr> <th> ammuamuthcs194@gmail.com </th></td>";

$body .= "<tr> <th> This is testing mail with HTML and CSS tag </th></td>";

$body .= "/table>"; 



$header = "From:amuthacs4@gmail.com \r\n";
$header .= "MIME-version: 1.0\r\n";
$header .= "Content-type: tet/html\r\n";


$val = mail(@to,$subject,$body, $header);

if($val== true) {
    echo "Mail send sucessfully....";
} 
else {
    echo "Mail sending failed.....";
}

?> 