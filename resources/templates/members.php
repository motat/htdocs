<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$sql='SELECT * FROM members WHERE pid=:pid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':pid' => $pid
	));
while($row=$stmt->fetch())
{
	$uid=$row['uid'];
	$role=$row['role'];
	$sqlacc='SELECT * FROM accounts WHERE uid=:uid';
	$stmtacc=$conn->prepare($sqlacc);
	$stmtacc->execute(array(
	':uid' => $uid
	));
	$rowacc=$stmtacc->fetch();
	$username=$rowacc['username'];
	echo $username; echo " (".$role.")";
}
?>