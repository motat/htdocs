<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$eid=$_GET['eid'];
$sql='UPDATE entrys SET vis=:vis WHERE eid=:eid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':vis' => '0',
	':eid' => $eid
	));
$sql='DELETE FROM requests WHERE eid=:eid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':eid' => $eid
	));

?>