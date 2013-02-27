<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Registration Page</title>
    <link href="css/listingsstyle.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
       
        
    </style>
             
</head>
<body>
<?php
include 'resources/config.php';
session_start();
?>
    <div id="top">
        <div class="main">
            <div id="header"></div> 
            <a href="#"><div style=background:url('images/menu.png'); height=124px; id="menu"></div></a> 
<?php require_once ("resources/templates/navbar.php"); ?>
            <div id="content">
                <div id="quote">
                     <h1>&quot;Information is not knowledge.&quot;</h1>
                <h2>-Albert Einstein</h2>
                </div>
            </div>
<?php require_once ('resources/templates/listings.php'); ?>
           <div id='footer'>
            <div id='copyright'>
                <h1>
                    <?php require_once ('resources/templates/pagination.php'); ?>
                </h1>
            </div>
           </div>
           <div id='footer'>
            <div id='contact'>
              
            </div>
            <div id='copyright'>
                <h1>&#169; Vadim Pishchenko</h1>
            </div>
           </div>
        </div>
    </div>
   
</body>
</html>
