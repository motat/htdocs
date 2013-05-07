<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$_SESSION['pid']=$_GET['pid'];
header("location:$root/teampage.php");	
?>