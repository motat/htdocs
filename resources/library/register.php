<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql='INSERT INTO accounts (firstname,lastname,email,password) VALUES (:firstname, :lastname, :email, :password)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':firstname' => $firstname,
    ':lastname' => $lastname,
    ':email' => $email,
    ':password' => $password ));
header("location:$baseurl/success.php?success=registered");
?>