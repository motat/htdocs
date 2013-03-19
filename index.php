<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?></title>
    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery.google_menu.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<div id="top">
    <div class="main">
        <div id="header">
        </div>
            <a href="http://localhost">
                <div style=background:url('images/menu.png'); height=124px; id="menu">
                </div>
            </a> 
            <?php require_once ("resources/templates/navbar.php"); ?>  
            <?php require_once ("resources/templates/quote.php"); ?>
            
            <div id="info">
                    <h3>Greetings, from Ahhha!</h3>
                <div id="intro">
                    <h2 style='padding-top:50px;'>Register, login, and get ready for your Ahhha moments!</h1>
                    
                </div>
            </div>
            <div id="info2">
                <div id="intro2">
                    <h2>Currently, our service is focused on, and supported towards, The Southern California area.</h2>
                </div>
            </div>
         
        
    </div>
<!--<div class='footer'>
    <div id='footer'>
        <div id='footerleft'>
            Left
        </div>
       
        <div id='footerright'>
            Right
        </div>
    </div>
</div>-->
</div>
</body>
</html>
