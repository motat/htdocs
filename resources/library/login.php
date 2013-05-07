<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$email=$_POST['email'];
$password=$_POST['password'];
$sql='SELECT * FROM accounts WHERE email=:email';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':email' => $email 
	));
	$row=$stmt->fetch();
	$salt=$row['salt'];
	$uid=$row['uid'];
	$password=sha1($password.$salt);
$sql='SELECT COUNT(*) FROM accounts WHERE email=:email AND password=:password';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':email' => $email,
	':password' => $password
	));
$count=$stmt->fetchColumn();
if($count==1)
	{
		session_start();
		$_SESSION['uid']=$row['uid']; 
		header("location:$root/index.php?login=yes");
	}
	else
	{
		header("location:$root/index.php?login=no");
	}
?>

