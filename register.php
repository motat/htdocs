<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha Registration Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />            
</head>
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
        <div id="info">
            <div id="minibar"><h3>Registration</h3></div>
            <div id="intro">
                <form action="register.php" method="POST">  
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
</div> 
</body>
</html>
