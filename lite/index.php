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
<div class='container'>
    <?php require_once('resources/library/sidebar.php'); ?>
    <div class='block'></div>
    <?php require_once('more.php'); ?>
    <?php require_once('indexbody.php'); ?>  
</div>
<div style='clear:both;'></div>
<div class='mainfooter'>
	<div id='mainlink'>
		<h2><a href='#'><span class='nav'>help</span><a/> {} <a href='#'><span class='nav'>tos : <?php if(isset($_SESSION['uid'])) { echo $_SESSION['uid']; } ?></span><a/></h2>
	</div>
	<div style='clear:both;'></div>
</div>
</div>
</body>
</html>
