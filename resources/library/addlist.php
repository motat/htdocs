<?php
session_start();
$subject = $_POST['subject'];
$information = $_POST['information'];

$county = $_POST['county'];

if(isset($_SESSION['id']))
    {
    if(isset($_POST['payment']))
        {
        $payment = $_POST['payment'];
        $id = $_SESSION['id'];
        mysql_connect ("localhost", "root") or die ('Error: ' . mysql_error());
        mysql_select_db ("ahhha");
        $query1 = "SELECT * FROM accounts WHERE id= '$id';";
        $result1 = mysql_query($query1) or die(mysql_error());
        $row = mysql_fetch_array($result1) or die(mysql_error());
        $firstname = $row['firstname'];
        $query="INSERT INTO listings (id,subject,information,payment,firstname,county) VALUES ('$id','$subject','$information','$payment','$firstname','$county')";
        mysql_query($query) or die ('Error updating database');
        require_once(realpath(dirname(__FILE__) . "/../config.php"));  
        header("location:$baseurl/successlisting.php");
        }
    else
        {
        
        $id = $_SESSION['id'];
        mysql_connect ("localhost", "root") or die ('Error: ' . mysql_error());
        mysql_select_db ("ahhha");
        $query1 = "SELECT * FROM accounts WHERE id= '$id';";
        $result1 = mysql_query($query1) or die(mysql_error());
        $row = mysql_fetch_array($result1) or die(mysql_error());
        $firstname = $row['firstname'];
        $query="INSERT INTO listings (id,subject,information,payment,firstname,county) VALUES ('$id','$subject','$information','no','$firstname','$county')";
        mysql_query($query) or die ('Error updating database');
        require_once(realpath(dirname(__FILE__) . "/../config.php"));  
        header("location:$baseurl/successlisting.php");
        }
    }
 
?>