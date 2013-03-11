<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Registration Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include 'resources/config.php';
session_start();
?>
<div class="container">
    <div class="main">
        <div id="header">   
        </div> 
            <a href="http://localhost">
                <div style=background:url('images/menu.png'); height=124px; id="menu"> 
                </div>
            </a> 
            <?php require_once ('resources/templates/navbar.php'); ?>
            <?php require_once ("resources/templates/quote.php"); ?>
            <div id="info"  style='height:100px;'>
                <div id='intro'>
<h2 style='padding-top:10px;'>View listings that have been put up by the public, clicking the <div id='box2'>&nbsp;</div> will mark the professor and notify him that you request his lesson. <font color='#B87877'><a href='add.php'>Add a new lesson here.</a></font> </h2>
                </div>
            </div>
            <?php require_once ('resources/templates/listings.php'); ?>
           
            <?php require_once ('resources/templates/pagination.php'); ?>
            
	    
            
        </div>
    
 <?php require_once ('resources/templates/search.php'); ?>
   </div>
</body>
</html>
