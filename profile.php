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
<div class='cont'>
	<?php require_once('resources/templates/navbar.php'); ?>
	<div class='block'></div>
	<?php require_once('resources/templates/logo.php'); ?>
	<div class='space'></div>
	<div id='l1' style='width:65%;'>
		<div class='padbox'>
			<center>
				<span class='smallmed'>the profile of </span><span class='mediumlarge'>Vadim Pishchenko</span>
				</br>
				<span class='smallmed'>a </span><span class='mediumlarge'>Programmer</span>
				</br>
				<span class='smallmed'>whos worked on </span><span class='mediumlarge'>3 Projects</span>
			</center>
		</div>
	</div>
	<div id='r1' style='width:32%;'>
		<span class='medium'><center>
			My dream is to create 
			technology that streamlines and 
			makes any process more
			efficient. Wasting time is not
			and option.
		</center></span>
	</div>
	<div class='clear'></div>
	<div class='space'></div>
	<div id='l1' style='width:48%;'>
		<div class='heading'>
			<h3>Current Projects</h3>
		</div>
		<div class='padbox'>
			<span class='purple'>ahhyes</span>
			<div class='padbox'>
				<span class='medium'>
					a service to provide a platform for students
					to find a teacher for any subject.
				</span>
			</div>
		</div>
	</div>
	<div id='r1' style='width:48%;'>
		<div class='heading'>
			<h3>Recent Works</h3>
		</div>
		<div class='padbox'>
			<span class='purple'>honeybrescue</span>
			<div class='padbox'>
				<span class='medium'>
					a website for a free honeybeerescue and harvest service
				</span>
			</div>
		</div>
		<div class='padbox'>
			<span class='purple'>Julias Home Bakery</span>
			<div class='padbox'>
				<span class='medium'>
					a bakery for authentic, and delicious russian pastries, cakes, and other tasty sweets.
				</span>
			</div>
		</div>
	</div>
	<div class='clear'></div>
	<div class='space'></div>
</div>
<div id='l2'>
	<h4>ahhyes.org</h4>
	<h2>your project</h2>
</div>
<div class='clear'></div>
</body>
</html>
