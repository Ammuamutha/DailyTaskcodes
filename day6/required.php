<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Required form </title>
</head>
<body>
    <?php
        $nameErr = $phoneErr = $emailErr = $addressErr = $genderErr =$commentErr = "";
        $name = $phone = $email = $address = $gender =$comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["phone"])) {
              $phoneErr = "phone is required";
            } else {
              $phone = test_input($_POST["phone"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "email is required";
              } else {
                $email = test_input($_POST["email"]);
              }
              if (empty($_POST["address"])) {
                $addressErr = "address is required";
              } else {
                $address = test_input($_POST["address"]);
              }

              if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = test_input($_POST["gender"]);
              }
          
            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }
          
            
          }
          
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        
    ?>


<h3> Required field </h3>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name ="name"> 
<span class="error">* <?php echo $nameErr;?></span>
<br> <br>
Mobile Number: <input type="tel" name ="phone">
<span class="error">* <?php echo $phoneErr;?></span>
<br> <br>
Email Id: <input type="text" name ="email">
<span class="error">* <?php echo $emailErr;?></span>
<br> <br>
Address : <input type="text" name ="address">
<span class="error">* <?php echo $addressErr;?></span>
<br> <br>       
Gender:
    <input type="radio" name ="gender" value ="female">  Female
    <input type="radio" name ="gender" value ="male">  Male
    <input type="radio" name ="gender" value ="others">  others
    <br> <br>           
Comment: <textarea name="comment" rows="4" cols="30"></textarea>
    <br> <br>
<input type="submit" name ="submit" value ="submit">    
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;      
?>




</body>
</html>