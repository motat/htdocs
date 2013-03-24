<?php session_start(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
?>
<!--MAKE COUNTY DISPLAYS A LIST. THAT WAY YOU CAN ADD DIFFERENT COUNTIES TO THE DATABASE AND THIS WILL MAKE IT INTO A LIST THAT QUERIES ANY COUNTIES IN THE LIST.
BETTER FOR SCALING-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="icon" 
      type="image/png" 
      href="images/myicon.png">
    <title><?php echo $webname;?> - Select County</title>
    <meta name="description" content="select a county that you wish to find a lesson in. only orange county is supported">
    <script type="text/javascript" src="script/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="script/jquery.google_menu.js"></script>
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
        <div id='halfbar' ><h1>Select your County</h1></div>
        <div id='marklist'>
            <div id='marklistings'>
                <div id='marklistleft'>
                    <h1><a href='listings.php?county=oc'>Orange County</a></h1>
                </div>
            </div>
	</div>
	<div id='marklist'>
            <div id='marklistings'>
                <div id='marklistleft'>
                    <h1><a href='listings.php?county='>All Counties</a></h1>
                </div>
            </div>
	</div>
        
    </div>
    <?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
