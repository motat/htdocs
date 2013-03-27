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
    <title><?php echo $webname;?> - More Info</title>
    <meta name="description" content="more information on a listing. subject and class ">
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
<div class='container'>
    <?php require_once ("resources/templates/logo.php"); ?>
    <?php require_once ('resources/templates/navbar.php'); ?>
    <?php require_once ("resources/templates/quote.php"); ?>          
    <div class='noheight'>
        <div class='darkback'>
            <div id='halfleft'>
                <h1>Contact</h1>
            </div>
            <div id='halfright'>
                <div class='pad'>
                    <h2>Vadim Pishchenko</h2>
                    <h2>contact@ahhyes.org</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once ('resources/templates/footer.php'); ?>
</body>
</html>