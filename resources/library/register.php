<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
mysql_connect ("localhost", "root", "root") or die ('Error: ' . mysql_error());
mysql_select_db ("ahhha");
$query="INSERT INTO accounts (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')";
mysql_query($query) or die ('Error updating database');
require_once(realpath(dirname(__FILE__) . "/../config.php"));  
header("location:$baseurl/registered.php");
?>