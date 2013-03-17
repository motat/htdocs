<?php
/*
NOTE ADD SECURITY MESSURE SO PEOPLE DONT EDIT INFO IN BROWSER AND DELETE MARKS - NOT DONE
Instead of Dropping the list, alter the list so that you, the admin, can keep data but no one can view it
*/
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$firstname=$_GET['firstname'];
$subject=$_GET['subject'];
$email=$_GET['email'];
//mysql_query("DELETE FROM marks WHERE firstname= '$firstname' AND subject= '$subject' AND email='$email'");
$sql='DELETE FROM marks WHERE firstname=:firstname AND subject=:subject AND email=:email';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':firstname' => $firstname,
    ':subject' => $subject,
    ':email' => $email ));
header("location:$baseurl/professor.php");
?>