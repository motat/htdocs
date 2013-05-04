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
<div class='block'></div>
<div class='buttons'>
	<div id='buttonholder'>
		<div id='buttongreen'>
			<center><h4>1</h4></center>
		</div>
		<div id='buttontext'>
			<span class='medium'>Choose team name</span>
		</div>
	</div>
	<div class='clear'></div>
	<div id='buttonholder'>
		<div id='buttongreen'>
			<center><h4>2</h4></center>
		</div>
		<div id='buttontext'>
			<span class='medium'>Create an account</span>
		</div>
	</div>
	<div class='clear'></div>
	<div id='buttonholder'>
		<div id='buttongreen'>
			<center><h4>3</h4></center>
		</div>
		<div id='buttontext'>
			<span class='medium'>Finalize team settings</span>
		</div>
	</div>
	<div class='clear'></div>
</div>
<div class='contmini'>
	<h2>
		You are finished! <span class='small'>The next page you will be taken to will be your team home page. It won't be populated, but adding members and getting started on working on your project will be easy!</span>
	</h2>
	<div class='block'></div>
	<h1><center><a href='index.php'>I'm Ready!</a></center></h1>
	<div class='block'></div>
</div>
	
</body>
</html>
