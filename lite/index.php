<?php session_start();?>
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Lite V</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src='script/showDiv.js'></script>
</head>
<body>
<div class='header'></div>
<div class='container'>
    <?php require_once('resources/templates/header.php'); ?>
    <?php require_once('resources/library/sidebar.php'); ?>
    <div class='block'></div>
    <?php require_once('more.php'); ?>
    <?php require_once('indexbody.php'); ?>  
</div>
<div style='clear:both;'></div>
<?php require_once('resources/library/footer.php'); ?>
</div>
</body>
</html>
