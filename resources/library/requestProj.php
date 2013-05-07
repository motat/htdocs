<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$pid=$_POST['pid'];
$uid=$_SESSION['uid'];
$role=$_POST['role'];
$sql='INSERT INTO members (pid,uid,role) VALUES (:pid,:uid,:role)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':pid' => $pid,
	':uid' => $uid,
	':role' => $role
	));
?>