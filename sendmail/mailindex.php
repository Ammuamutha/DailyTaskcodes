<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending mail</title>
</head>
<body>
    
    <form action="mailsend.php" method="POST" class="">
    <h2>Mail Function </h2>
    <label>Name</label>
    <input type="text" name="name" value="" placeholder="enter your name"> 
    <br><br>    
    <labe>Email</label>
    <input type="text" name="email" value="" placeholder="enter your email"> 
    <br><br>
    <label>Subject</label>
    <input type="text" name="subject" value="" placeholder="enter subject"> 
    <br><br>
    <p>Message</p>
    <textarea name="message" name="message" value="" cols="20" rows="5"></textarea> 
    <br><br>
    <button type="submit" name="send">send</button>
    </form>

</body>
</html> 