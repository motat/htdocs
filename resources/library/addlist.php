<?php
session_start();
$subject = $_POST['subject'];
$information = $_POST['information'];
$payment = $_POST['payment'];

if(isset($_SESSION['id']))

    $id = $_SESSION['id'];
    mysql_connect ("localhost", "root", "root") or die ('Error: ' . mysql_error());
    mysql_select_db ("ahhha");
    $query1 = "SELECT * FROM accounts WHERE id= '$id';";
    $result1 = mysql_query($query1) or die(mysql_error());
    $row = mysql_fetch_array($result1) or die(mysql_error());
    $firstname = $row['firstname'];
    $query="INSERT INTO listings (id,subject,information,payment,firstname) VALUES ('$id','$subject','$information','$payment','$firstname')";
    mysql_query($query) or die ('Error updating database');
    echo "Yes"
 
 
?>