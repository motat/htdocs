<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$salt=md5($email);
$salt=substr($salt,0,22);
$password = $_POST['password'];
$password=sha1($password.$salt);
if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
    $sql='INSERT INTO accounts (firstname,lastname,email,password,salt) VALUES (:firstname, :lastname, :email, :password, :salt)';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':password' => $password,
        ':salt' => $salt));
    header("location:$root/success.php?success=registered");  
    }
else
    {
    header("location:$root/failed.php?success=wrongemail"); 
    }

?>