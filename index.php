<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha!</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include 'resources/config.php';
?>
<div id="top">
    <div class="main">
        <div id="header">
        </div>
            <a href="http://localhost">
                <div style=background:url('images/menu.png'); height=124px; id="menu">
                </div>
            </a> 
            <?php require_once ('resources/templates/navbar.php'); ?>
            <?php require_once ("resources/templates/quote.php"); ?>  
            <div id="info">
                <div id="minibar">
                    <h3>Welcome</h3>
                </div>
                <div id="intro">
                    <h1>Greetings, from Ahhha!</h1>
                </div>
            </div>
            <div id="info2">
                <div id="intro2">
                    <h2>Currently, our service is focused on, and supported towards, The Southern California area.</h2>
                </div>
            </div>
            <?php require_once ('resources/templates/footer.php'); ?>
        </div>
    </div>
</body>
</html>
