<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];

    $sql='SELECT * FROM accounts WHERE id=:id';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':id' => $id ));
    $row=$stmt->fetch();
    
    $createid = $_GET['createid'];
    $subject = $_GET['subject'];
    $uid = $_GET['uid'];
    $prof = $_GET['prof'];
    $information = $_GET['information'];
    $markid = $_GET['markid'];
    $firstname = $row['firstname'];
    $email = $row['email'];
    $sql1='INSERT INTO marks (id,firstname,email,createid,subject,prof,information,markid) VALUES (:uid,:firstname,:email,:createid,:subject,:prof,:information,:markid)';
    $stmt=$conn->prepare($sql1);
    $stmt->execute(array(
        ':uid' => $uid,
        ':firstname' => $firstname,
        ':email' => $email,
        ':createid' => $createid,
        ':subject' => $subject,
        ':prof' => $prof,
        ':information' => $information,
        ':markid' => $markid )); 
    header("location:$baseurl/listings.php?county=".$_GET['county']);
}
else
{   
    header("location:$baseurl/resources/templates/requirelogin.php");
}
?>