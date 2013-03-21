<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));




// username and password sent from form
$email=$_POST['email']; 
$password=$_POST['password'];
//SQL to get account ID
$sql1='SELECT * FROM accounts WHERE email=:email';
$stmt1=$conn->prepare($sql1);
$stmt1->execute(array(
    ':email' => $email ));
$row=$stmt1->fetch();
$salt=$row['salt'];
$password=sha1($password.$salt);
//SQL to count and compare if user/pass is correct
$sqlcount='SELECT COUNT(*) FROM accounts WHERE email=:email AND password=:password';
$stmtcount=$conn->prepare($sqlcount);
$stmtcount->execute(array(
    ':email' => $email,
    ':password' => $password));
$count = $stmtcount->fetchColumn();
if($count==1)
    {
    session_start();
    $_SESSION['id']=$row['id'];
    require_once(realpath(dirname(__FILE__) . "/../config.php"));  
    header("location:$baseurl/success.php?success=login");
    }
else
    {
    header("location:$root/failed.php?success=wronginfo");
    }
?>
