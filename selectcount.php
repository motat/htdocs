<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<!--MAKE COUNTY DISPLAYS A LIST. THAT WAY YOU CAN ADD DIFFERENT COUNTIES TO THE DATABASE AND THIS WILL MAKE IT INTO A LIST THAT QUERIES ANY COUNTIES IN THE LIST.
BETTER FOR SCALING-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?> - Select County</title>
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
</div>
</body>
</html>
