<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha Registration Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />      
</head>
<?php
include ('resources/config.php');
session_start();
?>
<body>
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
        <?php if(!isset($_SESSION['id'])) { ?>
        <div id="info">
            <div id="minibar">
                <h3>Login</h3>
            </div>
            <div id="intro" style=padding-top:60px; >
                <form action="resources/library/login.php" method="POST">                    
                    <label for=”email”>Email<input type="text" name="email"/></label>
                    <label for=”password”>Password<input type="password" name="password"/></label>
                    <br/>
                        <input type="submit" value="Login"/>
                </form>
                    <br/>
                    <h2>If you do not have an account, please sign up <a href="http://localhost/register">here!</a></h2>  
            </div>
        </div>
        <?php
        }
        else
        {
        ?>
        <div id="info">
            <div id="minibar"><h3>Logged In</h3></div>
                <div id="profile">
                <h4>You are already logged in</h4>  
                </div>
            </div>
        <?php
        }
        ?>
        <?php require_once ('resources/templates/footer.php'); ?>
        </div>
    </div>
</div>
</body>
</html>
