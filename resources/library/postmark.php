<?php
ini_set("error_reporting", "true");  
error_reporting(E_ALL|E_STRCT);  
   
session_start();
if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
    mysql_connect ("localhost", "root", "root") or die ('Error: ' . mysql_error());
    mysql_select_db ("ahhha");
    $query1 = "SELECT * FROM accounts WHERE id= '$id'";
    $result1 = mysql_query($query1) or die(mysql_error());
    $row = mysql_fetch_array($result1) or die(mysql_error());
    $createid = $_GET['createid'];
    $subject = $_GET['subject'];
    $uid = $_GET['uid'];
    $firstname = $row['firstname'];
    $email = $row['email'];
    $query="INSERT INTO marks (id,firstname,email,createid,subject) VALUES ('$uid','$firstname','$email','$createid','$subject')";
    mysql_query($query) or die ('Error updating database');
    echo "Yes";
}
else
{
    echo "no";
}
?>