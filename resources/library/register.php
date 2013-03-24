<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$salt=md5($email);
$salt=substr($salt,0,22);
$password = $_POST['password'];
$password=sha1($password.$salt);
//Check to see if Email already registered
$sqlcheck='SELECT * FROM accounts WHERE email=:email';
$stmtcheck=$conn->prepare($sqlcheck);
$stmtcheck->execute(array(
    ':email' => $email));
if ( $stmtcheck->rowCount() > 0)
    {
         header("location:$root/register.php?pageid=2"); 
    }
    else
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
            $sql='INSERT INTO accounts (firstname,lastname,email,password,salt,marks) VALUES (:firstname, :lastname, :email, :password, :salt, :marks)';
            $stmt=$conn->prepare($sql);
            $stmt->execute(array(
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':email' => $email,
                ':password' => $password,
                ':salt' => $salt,
                ':marks' => '0' ));
            header("location:$root/success.php?success=registered");  
            }
        else
            {
            header("location:$root/register.php?pageid=1"); 
            }
    }       

?>