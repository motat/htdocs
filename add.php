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
<div class='contmini'>
	<?php require_once('resources/templates/navbar.php'); ?>
	<div class='block'></div>
	<div class='block'></div>
	<div class='block'></div>
	<?php require_once('resources/templates/logo.php'); ?>
	<div class='block'></div>
	<div id='body'>
		<?php if ($_GET['page'] == 1){ ?>
		<div class='heading'>
			<h3><i>Add a Member</i></h3>
		</div>
		<div class='padbox'>
			<h3>Currently, no members are requesting access to your project.</h3>
		</div>
		<?php } ?>
		<?php if ($_GET['page'] == 2){ ?>
		<div class='heading'>
			<h3>Create a Task</h3>
		</div>
		<div class='padbox'>
			<form>
				<center>
					<input type='text' placeholder='Task'></input>
					<textarea>Task specifics</textarea>
				</center>
			</br>
				<button>Create</button>
			</form>
		</div>
		<?php } ?>
		<?php if ($_GET['page'] == 3){ ?>
		<div class='heading'>
			<h3>Add a note</h3>
		</div>
		<div class='padbox'>
			<h3>Add a quick note for your team members to see</h3>
			<form>
				<center>
					<input type='text' placeholder='Note'></input>
				</center>
			</br>
				<button>Create</button>
			</form>
		</div>
		<?php } ?>
	</div>
</div>
	
</body>
</html>
