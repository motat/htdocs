<?php
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));  
$subject = mysql_real_escape_string($_POST['subject']);
$information = mysql_real_escape_string($_POST['information']);

$county = $_POST['county'];

if(isset($_SESSION['id']))
    {
    if(isset($_POST['payment']))
        {
        $payment = mysql_real_escape_string($_POST['payment']);
        $id = mysql_real_escape_string($_SESSION['id']);
        $query1 = "SELECT * FROM accounts WHERE id= '$id';";
        $result1 = mysql_query($query1) or die(mysql_error());
        $row = mysql_fetch_array($result1) or die(mysql_error());
        $firstname = mysql_real_escape_string($row['firstname']);
        $query="INSERT INTO listings (id,subject,information,payment,firstname,county) VALUES ('$id','$subject','$information','$payment','$firstname','$county')";
        mysql_query($query) or die ('Error updating database');
        header("location:$baseurl/success.php?success=listings");
        }
    else
        {
        
        $id = mysql_real_escape_string($_SESSION['id']);

        $query1 = "SELECT * FROM accounts WHERE id= '$id';";
        $result1 = mysql_query($query1) or die(mysql_error());
        $row = mysql_fetch_array($result1) or die(mysql_error());
        $firstname = mysql_real_escape_string($row['firstname']);
        $query="INSERT INTO listings (id,subject,information,payment,firstname,county) VALUES ('$id','$subject','$information','no','$firstname','$county')";
        mysql_query($query) or die ('Error updating database');

        header("location:$baseurl/success.php?success=listings");
        }
    }
    else
    {
        Echo" login required";
    }
 
?>