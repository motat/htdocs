<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$pid=$_SESSION['pid'];
$sql='SELECT * FROM members WHERE pid=:pid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':pid' => $pid
	));
while($row=$stmt->fetch())
{
	$uid=$row['uid'];
	$mid=$row['mid'];
	$role=$row['role'];
	$sqlacc='SELECT * FROM accounts WHERE uid=:uid';
	$stmtacc=$conn->prepare($sqlacc);
	$stmtacc->execute(array(
		':uid' => $uid
		));
	$rowacc=$stmtacc->fetch();
	$username=$row['username'];
	echo $username; echo ' ('; echo $role; echo ')'; echo '<a href="resources/library/request.php?id=1?mid='.$mid.'">Accept</a>'; echo '<a href="resources/library/request.php?id=2?mid='.$mid.'">Decline</a>';
}