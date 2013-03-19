<?php
/*
NOTE ADD SECURITY MESSURE SO PEOPLE DONT EDIT INFO IN BROWSER AND DELETE MARKS - NOT DONE
Instead of Dropping the list, alter the list so that you, the admin, can keep data but no one can view it
*/
session_start();
$id=$_SESSION['id'];
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$createid=$_GET['createid'];
//mysql_query("DELETE FROM marks WHERE firstname= '$firstname' AND subject= '$subject' AND email='$email'");
$sql='DELETE FROM listings WHERE createid=:createid AND id=:id';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':createid' => $createid,
    ':id' => $id ));
header("location:$baseurl/professor.php");
?>