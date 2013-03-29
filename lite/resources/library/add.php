<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$subject=$_POST['subject'];
$information=$_POST['information'];
$payment=$_POST['payment'];
$uid=$_SESSION['uid'];
$county=$_POST['county'];
$sql='INSERT INTO entrys (uid,subject,information,payment,county) VALUES (:uid,:subject,:information,:payment,:county)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid,
	':subject' => $subject,
	':information' => $information,
	':payment' => $payment,
	':county' => $county ));
?>
