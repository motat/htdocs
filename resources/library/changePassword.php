<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$username=$_POST['username'];
$email=$_POST['email'];
$salt=md5($email);
$salt=substr($salt,0,22);
$password=$_POST['password'];
$password=sha1($password.$salt);
if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{	
	//Check if Email Exsists
	$sql='SELECT * FROM accounts WHERE email=:email';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
		':email' => $email));
	if($stmt->rowCount() > 0)
		{
			header("location:$root/index.php?createuser=no");
		}
		else
		{
			$sql='INSERT INTO accounts (username,email,password,salt,new) VALUES (:username,:email,:password,:salt,:new)';
			$stmt=$conn->prepare($sql);
			$stmt->execute(array(
				':username' => $username,
				':email' => $email,
				':password' => $password,
				':salt' => $salt,
				':new' => '0' ));
				header("location:$root/index.php?msg=3");
		}
	}
	else
	{
		header("location:$root/index.php?createuser=invemail");
	}

	$query='UPDATE accounts SET email=:email WHERE id=:id';
?>


