<?php 
$to = "vadimprivate@yahoo.com"; 
$name=$_POST['name'];
$subject = "PORTFOLIO " . $name; 
$email = $_POST['email'] ;  
$body = $_POST['body'] ; 
$headers = "From:" . $email; 
$sent = mail($to, $subject, $body, $headers) ; 
if($sent) 
{header("location:index.php?send=yes"); }
else 
{header("location:index.php?send=no"); }
?> 