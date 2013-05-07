<?php
$uid=$_SESSION['uid'];
$sql='SELECT * FROM projects WHERE admin=:uid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
while($row=$stmt->fetch())
{
	$project=$row['project'];
	$pid=$row['pid'];
	echo 
		"<span class='medium'><a href='resources/library/assignProj.php?pid=".$pid."'>".$project."</span>";
}
?>