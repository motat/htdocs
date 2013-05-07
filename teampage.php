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
<?php
if(!isset($_SESSION['pid']))
{
	header("location:$root/project.php");
}
$pid=$_SESSION['pid'];
?>
	<?php require_once('resources/templates/navbar.php'); ?>
	<div class='block'></div>
	<?php require_once('resources/templates/logo.php'); ?>
	<div class='space'></div>
	<div id='l1' style='width:32%;'>
		<div class='heading'>
			<h3>Members<span class='small'> <a href='add.php?page=1'>+ add</a></span></h3>
		</div>
		<div class='padbox'>
			<span class='medium'>
				<?php require_once ('resources/templates/members.php'); ?>
			</span>
		</div>
	</div>
	<div id='r1' style='width:65%;'>
		<div class='padbox'>
			<h2><center>
				<?php require_once ('resources/library/messageProj.php'); ?>
			</center></h2>
		</div>
	</div>
	<div class='clear'></div>
	<div class='space'></div>
	<div id='body'>
		<div class='heading'>
			<h3>Objectives<span class='small'> <a href='add.php?page=2'>+ add</a></span></h3>
		</div>
		<div class='padbox'>
			<div class='square'>
				<div class='padbox'>
					<center><h5>Vadim</h5></center>
				</br>
					<span class='smallmed'>update progress</span> 
					<div class='lines'></div>
					<span class='mediummed'>Finish the design of the
website splash page</span>
					</br>
					</br>
					<div class='info'>
						<div class='padbox'>
							<span class='smallmed'>color scheme should be 
								saomething warm, also try
								and make sure the header
								color is the write color
							</span>
						</div>
					</div>
					<div class='clear'></div>
					<div class='lines'></div>
					<span class='medium'>design splash page</span>
					<div class='lines'></div>
					<span class='medium'>figure out color scheme</span>
				</div>
			</div>
			<div class='square'>
				<div class='padbox'>
					<h5>Vadim</h5>
					<span class='medium'>| finish the website layout</span>
				</div>
			</div>
		</div>
		<div class='clear'></div>
	</div>
	<div class='space'></div>
	<div id='body'>
		<div class='heading'>
			<h3>Notes<span class='small'> <a href='add.php?page=3'>+ add</a></span></h3>
		</div>
		asd
	</div>
</div>
<div id='l2'>
	<h4>ahhyes.org</h4>
	<h2>your project</h2>
</div>
<div class='clear'></div>
</body>
</html>
