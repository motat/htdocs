<?php
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$uid=$_SESSION['uid'];
$eid=$_GET['eid'];
//Get Username
$sql='SELECT * FROM accounts WHERE uid=:uid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
$row=$stmt->fetch();
$username=$row['username'];
//GET aud using eid
$sql='SELECT * FROM entrys WHERE eid=:eid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':eid' => $eid
	));
$row=$stmt->fetch();
$aid=$row['uid'];
$subject=$row['subject'];
//CHECK if request exsists
$sql='SELECT * FROM requests WHERE uid=:uid AND eid=:eid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid,
	':eid' => $eid
	));
if($stmt->rowCount() == 0 )
	{	
	$sql='INSERT INTO requests (uid,eid,aid,username,subject) VALUES (:uid,:eid,:aid,:username,:subject)';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
		':uid' => $uid,
		':eid' => $eid,
		':aid' => $aid,
		':username' => $username,
		':subject' => $subject
		));
	header("location:$root/index.php?msg=1");
	}
	else
	{
	header("location:$root/index.php?msg=2");	
	}