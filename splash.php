<?php session_start();?>
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
include 'resources/config.php';
?>
<head>
	<link rel="icon" type="image/png" href="images/myicon.png">
    <title><?php echo $webname;?></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="scripts/js.js"></script>
</head>
<body>
<div class='block'></div>
<div class='block'></div>
<div class='block'></div>
<h1>TeamCreater</h1>
<div class='block'></div>
<div class='contmini'>
	<h2><center>
		 A place when your team can coordinate and communicate with each other to work on a project <span class='red'>efficiently.</center></span>
	</h2>
	<div class='block'></div>
	<span class='large'><center>Create Your Project</center><span>
	<form>
		<div class='holder'>
			<center><input type='text' placeholder='Your project name..'></input></center>
			<button>Start!</button>
			<span class='warn'>or login here.</span>
		</div>
	</form>
</div>

	
</body>
</html>
