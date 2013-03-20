<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?></title>
    <meta name="description" content="connect with professor or tutor for any lesson. you can list any trade or skill you want to teach">
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
            <a href="http://localhost">
                <div style=background:url('images/menu.png'); height=124px; id="headerimage">
                </div>
            </a> 
            <?php require_once ("resources/templates/navbar.php"); ?>  
            <?php require_once ("resources/templates/quote.php"); ?>
            
            <div id="info">
                    <h3>Greetings, </h3>
                <div id="intro">
                    <h2 style='padding-top:20px;'>No matter what the subject is, there is always someone willing to teach it, and someone to learn it. Learn! Teach!</h2>
                </div>
            </div>
            <div id="info2">
                <div id="intro2">
                    <h2>Currently, our service is focused on, and supported towards, The Southern California area.</h2>
                </div>
            </div>
         
        
    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
