<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$subject=$_POST['subject'];
$information=$_POST['information'];
$payment=$_POST['payment'];
$uid=$_SESSION['uid'];
$county=$_SESSION['county'];
$sql='INSERT INTO entrys (uid,subject,information,payment,county,vis) VALUES (:uid,:subject,:information,:payment,:county,:vis)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid,
	':subject' => $subject,
	':information' => $information,
	':payment' => $payment,
	':county' => $county,
	':vis' => '1' ));
header("location:$root/index.php?msg=4");	
?>
