<?php
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$uid=$_SESSION['uid'];
$eid=$_GET['eid'];
//CHECK if request exsists
$sql='SELECT * FROM requests WHERE uid=:uid AND eid=:eid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid,
	':eid' => $eid
	));
if($stmt->rowCount() == 0 )
	{	
	$sql='INSERT INTO requests (uid,eid) VALUES (:uid,:eid)';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
		':uid' => $uid,
		':eid' => $eid
		));
	header("location:$root/index.php?msg=1");
	}
	else
	{
	header("location:$root/index.php?msg=2");	
	}