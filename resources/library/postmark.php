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
    $lastname = $row['lastname'];
    $email = $row['email'];
    $query="INSERT INTO marks (id,lastname,email,createid) VALUES ('$id','$lastname','$email','$createid')";
    mysql_query($query) or die ('Error updating database');
    echo "Yes";
}
else
{
    echo "no";
}
?>