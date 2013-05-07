<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$admin=$_SESSION['uid'];
$project=$_POST['projectname'];
$members=$_POST['members'];
$information=$_POST['information'];
$goals=$_POST['goals'];

$sql='INSERT INTO projects (project,members,information,goals,admin) VALUES (:project,:members,:information,:goals,:admin)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':project' => $project,
	':members' => $members,
	':information' => $information,
	':goals' => $goals,
	':admin' => $admin
	));
header("location:$root/stepfour.php");
?>