<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
   <title>Registration Page</title>
    <link href='css/style.css' rel='stylesheet' type='text/css' media='screen' />
</head>
<body>
<?php
include 'resources/config.php';
session_start();
?>
<div id='top'>
<div class='main'>
	  <div id='header'>   
        </div> 
            <a href='#'>
                <div style=background:url('images/menu.png'); height=124px; id='menu'> 
                </div>
            </a>
            <?php require_once ('resources/templates/navbar.php'); ?>
            <?php require_once ('resources/templates/quote.php'); ?>
	    <?php require_once ('resources/templates/searchquery.php'); ?>

        </div>
</div>
</body>
</html>
