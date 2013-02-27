<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="ahhha"; // Database name 
$tbl_name="accounts"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$email=$_POST['email']; 
$password=$_POST['password'];


// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$password'";
$result=mysql_query($sql);

$query1 = "SELECT * FROM accounts WHERE email= '$email';";
$result1 = mysql_query($query1) or die(mysql_error());
$row = mysql_fetch_array($result1) or die(mysql_error());

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

session_start();
$_SESSION['id']=$row['id'];
require_once(realpath(dirname(__FILE__) . "/../config.php"));  



header("location:$baseurl/loggedin.php");
}
else {
echo "Wrong Username or Password" ;
}
?>