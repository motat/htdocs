<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
if(isset($_SESSION['uid']))
{
	$uid=$_SESSION['uid'];
	$sql='SELECT * FROM accounts where uid=:uid';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
		':uid' => $uid
		));
	$row=$stmt->fetch();
	$email=$row['email'];
	$salt=md5($email);
	$salt=substr($salt,0,22);
	$password=$_POST['password'];
	$password=sha1($password.$salt);
	$sql='UPDATE accounts SET password=:password, salt=:salt WHERE uid=:uid';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
		':password' => $password,
		':salt' => $salt,
		':uid' => $uid
		));
}
    header("location:$baseurl/index.php?success=changepwd");

?>


