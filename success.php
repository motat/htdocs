<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha Registration Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include 'resources/config.php';
$success=$_GET['success'];
?>    
<div id="top">
    <div class="main">
        <div id="header">
        </div>
        <a href="#">
            <div style=background:url('images/menu.png'); height=124px; id="menu">     
            </div>
        </a> 
        <?php require_once ('resources/templates/navbar.php'); ?>
        <?php require_once ("resources/templates/quote.php"); ?>  
        <div id="info">
            <div id="minibar">
                <h3>Login</h3>
            </div>
            <div id="success">
            <?php
                if($success=="login")
                {
                    echo "<h1>You have successfully logged in! Please visit either the <a href='http://localhost/professor'>professor panel</a> or the <a href='http://localhost/student'>student panel</a> to continue!</h1>"  ;
                }
                if($success=="mark")
                {
                    echo "<h1>You have marked the class as a requested class, and the professor will get back to you as soon as he is ready</h1>";
                }
                if($success=="listings")
                {
                     echo "<h1>Your lesson information has successfully been submitted. If a student decides he would like to take your class, you will be notified on the Professor Panel.</h1>";
                }
                if($success="registered")
                {
                    echo "<h1>You have successfully created an account! Please login <a href='http://localhost/login.php'>here</a></h1>";
                }
                if($success="loggedout")
                {
                    echo "<h2>You have successfully been logged out!</h2>";
                }
                ?>       
            </div>
        </div>
        <?php require_once ('resources/templates/footer.php'); ?>
    </div>
</div>
</body>
</html>
