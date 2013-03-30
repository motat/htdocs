<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$rid=$_GET['rid'];
$sql='DELETE FROM requests WHERE rid=:rid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':rid' => $rid
	));

?>