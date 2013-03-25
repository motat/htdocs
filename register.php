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
    <title><?php echo $webname;?> - Registration</title>
    <meta name="description" content="register and make an account to create listings or view them and find a class you desire">
    <script type="text/javascript" src="script/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="script/jquery.google_menu.js"></script>
    <link href="css/stylenew.css" rel="stylesheet" type="text/css" media="screen" />
    <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>            
</head>
<body>
<div class='container'>
    <div class='logo'>
    </div> 
    <?php require_once ("resources/templates/logo.php"); ?>
    <?php require_once ('resources/templates/navbar.php'); ?>
    <?php require_once ("resources/templates/quote.php");
    if(isset($_GET['pageid']))
        {
        $pageid=$_GET['pageid'];
        if($pageid=="1")
            {
            echo "
                <div class='small'> 
                    <h2>The email you entered is not a valid email.</h2> 
                </div>
            "  ;
            }
        }
    if(isset($_GET['pageid']))
        {
        $pageid=$_GET['pageid'];
        if($pageid=="2")
            {
            echo "
                <div class='small'> 
                    <h2>That email has already been registered as an account here. Please try another email, or try logging in.</h2> 
                </div>
            "  ;
	    }
        }        
    ?>  
    <div class='extralarge'>
        <div id='largeleft'>
	    <h3>First Name</h3>
	    <h3>Last Name</h3>
	    <h3>Email</h3>
	    <h3>Password</h3>
	</div>
	<div id='largeright'>
	    <form  action="resources/library/register.php" method="POST">  
		<input type="text" name="firstname"/>
		<br/>
		<input type="text" name="lastname"/>
		<br/>
		<input type="text" name="email"/>
		<br/>
		<input type="password" name="password"/>
		<br/>
		<input type="submit" value="Register"/>
	    </form>
	</div>
	<div style='clear:both;'></div>
	<br/>
        <h6>Creating an account states that you agree with the <a href="<?php echo $root;?>/tos.php">terms of service.</a></h6>
    </div>
</div>
    <?php require_once ('resources/templates/footer.php'); ?>
</body>
</html>
