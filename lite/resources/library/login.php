<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$username=$_POST['username'];
$password=$_POST['password'];
$sql='SELECT * FROM accounts WHERE username=:username';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':username' => $username 
	));
	$row=$stmt->fetch();
	$salt=$row['salt'];
	$uid=$row['uid'];
	$password=sha1($password.$salt);
$sql='SELECT COUNT(*) FROM accounts WHERE username=:username AND password=:password';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':username' => $username,
	':password' => $password
	));
$count=$stmt->fetchColumn();
if($count==1)
	{
		session_start();
		$_SESSION['id']=$row['uid']; 
		header("location:$root/index.php?login=yes");
	}
	else
	{
		header("location:$root/index.php?login=no");
	}
?>

