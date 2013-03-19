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
    $sqlget='SELECT * FROM listings WHERE createid=:createid';
    $stmtget=$conn->prepare($sqlget);
    $stmtget->execute(array(
        ':createid' => $createid ));
    $rowget=$stmtget->fetch();
    $subject=$rowget['subject'];
    $uid=$rowget['id'];
    $prof=$rowget['firstname'];
    $information=$rowget['information'];
    $firstname = $row['firstname'];
    $email = $row['email'];
    $sql1='INSERT INTO marks (id,firstname,email,createid,subject,prof,information,markid) VALUES (:uid,:firstname,:email,:createid,:subject,:prof,:information,:id)';
    $stmt=$conn->prepare($sql1);
    $stmt->execute(array(
        ':uid' => $uid,
        ':firstname' => $firstname,
        ':email' => $email,
        ':createid' => $createid,
        ':subject' => $subject,
        ':prof' => $prof,
        ':information' => $information,
        ':id' => $id )); 
    header("location:$baseurl/listings.php?county=".$_GET['county']);
}
else
{   
    header("location:$baseurl/resources/templates/requirelogin.php");
}
?>