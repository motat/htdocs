<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?> - Login</title>
    <meta name="description" content="login to be able to select a professor for a lesson of your choice">
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
        <?php if(!isset($_SESSION['id'])) { ?>
        <div id="info">
            <div id="intro" style=padding-top:20px; >
                <form action="resources/library/login.php" method="POST">                    
                    <label for=”email”>Email<input type="text" name="email"/></label>
                    <label for=”password”>Password<input type="password" name="password"/></label>
                    <br/>
                        <input type="submit" value="Login"/>
                </form>
                    <br/>
                    <h3>If you do not have an account, please sign up <a href="http://localhost/register.php">here!</a></h3>  
            </div>
        </div>
        <?php
        }
        else
        {
        ?>
        <div id="info">
                <div id="profile">
                <h4>You are already logged in</h4>  
                </div>
            </div>
        <?php
        }
        ?>
        
        </div>
    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
