<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$uid=$_GET['uid'];
$eid=$_GET['eid'];
$sql='UPDATE entrys SET vis=:vis WHERE eid=:eid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':vis' => '0',
	':eid' => $eid
	));
$sql='DELETE FROM requests WHERE uid=:uid AND eid=:eid';
$stmtdel=$conn->prepare($sql);
$stmtdel->execute(array(
	':uid' => $uid,
	':eid' => $eid
	));

header("location:$root/index.php?del=lesson");