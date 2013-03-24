<?php session_start(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="icon" 
      type="image/png" 
      href="images/myicon.png">
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
        <?php require_once ("resources/templates/logo.php"); ?>
        <?php require_once ('resources/templates/navbar.php'); ?>
        <?php require_once ("resources/templates/quote.php"); ?>  
        <?php if(!isset($_SESSION['id']))
                    {
                    if(isset($_GET['pageid']))
                        {
                        $pageid=$_GET['pageid'];
                        if($pageid=="1")
                            {
                            echo "
                            <div id='info'  style='height:50px;'>
                                   <div id='intro'>
                                       <h2 style='padding-top:5px;'>You entered in a wrong email or password, please try again</h2>
                                   </div>
                               </div>
                            "  ;
                            }
                        }
            ?>
        
        <div id="info">
            <div id="intro" style=padding-top:20px; >
                <form action="resources/library/login.php" method="POST">                    
                    <label for=”email”>Email<input type="text" name="email"/></label>
                    <label for=”password”>Password<input type="password" name="password"/></label>
                    <br/>
                        <input type="submit" value="Login"/>
                </form>
                    <br/>
                    <h3>If you do not have an account, please sign up <a href="<?php echo $root;?>/register.php">here!</a></h3>  
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
