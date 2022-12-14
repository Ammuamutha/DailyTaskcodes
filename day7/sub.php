<?php
// Read POST request params into global vars


$to = $_POST['sender_email'];
$from = 'ammuamuthacs194@gmail.com';
$subject = $_POST["subject"];
$message = $_POST["message"];


// Obtain file upload vars
$fileatt = $_FILES['attachment']['tmp_name'];
$fileatt_type = $_FILES['attachment']['type'];
$fileatt_name = $_FILES['attachment']['name'];
if (is_uploaded_file($fileatt)) {

 // Read the file to be attached ('rb' = read binary)

 $file = fopen($fileatt,'rb');
 $data = fread($file,filesize($fileatt));
 fclose($file);

 // Generate a boundary string

 $semi_rand = md5(time());
 $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 $headers = "From: $from";

 // Add the headers for a file attachment

 $headers .= "\nMIME-Version: 1.0\n" .
 "Content-Type: multipart/mixed;\n" .
 " boundary=\"{$mime_boundary}\"";  

 // Add a multipart boundary above the plain message

 $message = "This is a multi-part message in MIME format.\n\n" .
 "--{$mime_boundary}\n" .
 "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
 "Content-Transfer-Encoding: 7bit\n\n" .
 $message . "\n\n";

 // Base64 encode the file data

 $data = chunk_split(base64_encode($data));

 // Add file attachment to the message

 $message .= "--{$mime_boundary}\n" .
 "Content-Type: {$fileatt_type};\n" .
 " name=\"{$fileatt_name}\"\n" .
 "Content-Transfer-Encoding: base64\n\n" .
 $data . "\n\n" .
 "--{$mime_boundary}--\n";
}

// Send the message

$ok = @mail($to, $subject, $message, $headers);
if ($ok) {
 echo "<p>Mail sent! Yay PHP!</p>";
} else {
 echo "<p>Mail could not be sent. Sorry!</p>";
} ?>