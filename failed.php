<?php session_start(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
$success=$_GET['success'];?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="icon" 
      type="image/png" 
      href="images/myicon.png">
    <title><?php echo $webname;?> - Success</title>
    <meta name="description" content="created to pair professor and student together for any subject">
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
        <div style='height:100px;' id="info">
            <div id="success">
            <?php
                if($success=="wrongemail")
                {
                    echo "<h1>An incorrect email address was entered, please make sure that it is correct.</h1>"  ;
                }
                if($success=="wrongeinfo")
                {
                    echo "<h1>You entered an incorrect email or password.</h1>"  ;
                }
                if($success=="nosearch")
                {
                    echo "<h1>No search results.</h1>"  ;
                }
                
                ?>       
            </div>
        </div>
    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>

</body>
</html>
