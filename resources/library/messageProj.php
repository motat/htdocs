<?php
$pid=$_SESSION['pid'];
$sql='SELECT * FROM projects WHERE pid=:pid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':pid' => $pid
	));
$row=$stmt->fetch();
$information=$row['information'];
echo $information;
?>