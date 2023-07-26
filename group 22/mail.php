<?php

$name =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";
$recipient ="agyemank035@gmail.com";
mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 22</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="container">
        <h1>Thank you for reaching out, you will hear from us</h1>
        <p class="back">Go back to the <a href="index.html">Homepage</a>.</p>       
     </div>
</body>
</html>



';




?>