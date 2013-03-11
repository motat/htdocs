<?php
/*NOTE ADD SECURITY MESSURE SO PEOPLE DONT EDIT INFO IN BROWSER AND DELETE MARKS - NOT DONE*/
mysql_connect('localhost','root') or die ('Error :' . mysql_error());
mysql_select_db('ahhha');
$firstname=$_GET['firstname'];
$subject=$_GET['subject'];
$email=$_GET['email'];
mysql_query("DELETE FROM marks WHERE firstname= '$firstname' AND subject= '$subject' AND email='$email'");
require_once(realpath(dirname(__FILE__) . "/../config.php"));  
header("location:$baseurl/student.php");
?>