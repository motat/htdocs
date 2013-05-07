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
		<div class='heading'>
			<h3><i>Login</i></h3>
		</div>
		<div class='padbox'>
			<form action='resources/library/login.php' method='post'>
				<input type='text' name='email' placeholder='Email'></input>
				<input type='password' name='password' placeholder='Password'></input>
			</br>
				<button>Login</button>
			</form>
		</div>
	</div>
	<div class='block'></div>
	<div id='body'>
		<div class='heading'>
			<h3><i>Register</i></h3>
		</div>
		<div class='padbox'>
			<form action='resources/library/regAccount.php' method='post'>
				<input type='text' name='username' placeholder='Username'></input>
				<input type='text' name='email' placeholder='Email'></input>
				<input type='password' name='password' placeholder='Password'></input>
			</br>
				<button>Create</button>
			</form>
		</div>
	</div>
</div>

	
</body>
</html>
