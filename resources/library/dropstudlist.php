<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));

$autoid=$_GET['autoid'];

$sqlgetrec='SELECT * FROM marks WHERE autoid=:autoid';
$stmtgetrec=$conn->prepare($sqlgetrec);
$stmtgetrec->execute(array(
    ':autoid' => $autoid ));
$row = $stmtgetrec->fetch();

$uid=$row['id'];
$createid=$row['createid'];
$subject=$row['subject'];
$name=$row['prof'];

$sqlget='INSERT INTO recents (uid,createid,subject,firstname) VALUES (:uid,:createid,:subject,:name)';
$stmtget=$conn->prepare($sqlget);
$stmtget->execute(array(
    ':uid' => $uid,
    ':createid' => $createid,
    ':subject' => $subject,
    ':name' => $name ));

$sql='DELETE FROM marks WHERE autoid=:autoid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':autoid' => $autoid ));
header("location:$baseurl/student.php");
?>