<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
if(!isset($_POST['projectname']))
{
	$project='Your Project Name';
}
else
{
	$project=$_POST['projectname'];
}
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];
$salt=md5($email);
$salt=substr($salt,0,22);
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
			$sql='INSERT INTO accounts (username,email,password,salt) VALUES (:username,:email,:password,:salt)';
			$stmt=$conn->prepare($sql);
			$stmt->execute(array(
				':username' => $username,
				':email' => $email,
				':password' => $password,
				':salt' => $salt ));
			$sqlid='SELECT * FROM accounts WHERE email=:email';
			$stmtid=$conn->prepare($sqlid);
			$stmtid->execute(array(
				':email' => $email
				));
			$row=$stmtid->fetch();
			$uid=$row['uid'];
			session_start();
			$_SESSION['uid']=$uid;
				header("location:$root/stepthree.php?projectname=".$project);

		}
	}
	else
	{
		header("location:$root/index.php?createuser=invemail");
	}
?>
