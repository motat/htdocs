<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$subject=$_POST['subject'];
$information=$_POST['information'];
$payment=$_POST['payment'];
$uid=$_SESSION['uid'];
$county=$_POST['county'];
$sql='SELECT * FROM accounts WHERE uid=:uid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
$row=$stmt->fetch();
$username=$row['username'];
$sql='INSERT INTO entrys (uid,subject,username,information,payment,county,vis) VALUES (:uid,:subject,:username,:information,:payment,:county,:vis)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid,
	':subject' => $subject,
	':username' => $username,
	':information' => $information,
	':payment' => $payment,
	':county' => $county,
	':vis' => '1' ));
?>
