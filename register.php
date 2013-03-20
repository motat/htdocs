<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?> - Registration</title>
    <meta name="description" content="register and make an account to create listings or view them and find a class you desire">
    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="jquery.google_menu.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>            
</head>
<body>
<div id="top">
    <div class="main">
        <div id="header">      
        </div>  
        <a href="#">
            <div style=background:url('images/menu.png'); height=124px; id="headerimage">            
            </div>
        </a> 
        <?php require_once ('resources/templates/navbar.php'); ?>
        <?php require_once ("resources/templates/quote.php"); ?>  
        <div id="info">
            <div id="intro">
			<br/>
			<br/>
                <form  action="resources/library/register.php" method="POST">  
                    <label for=”firstname”>Firstname<input type="text" name="firstname"/></label>
                    <label for=”lastname”>Lastname<input type="text" name="lastname"/></label>
                    <label for=”email”>Email<input type="text" name="email"/></label>
                    <label for=”password”>Password<input type="password" name="password"/></label>
                    <input type="submit" value"submit"/>
                </form>
            </div>
        </div>
        <?php require_once ('resources/templates/footer.php'); ?>
    </div>
    <?php require_once ('resources/templates/footer.php'); ?>
</div> 
</body>
</html>
