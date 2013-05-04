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
		<div id='buttonred'>
			<center><h4>2</h4></center>
		</div>
		<div id='buttontext'>
			<span class='medium'>Create an account</span>
		</div>
	</div>
	<div class='clear'></div>
	<div id='buttonholder'>
		<div id='buttonred'>
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
		Before creating a project, you first need to create an account
		so that you could better manage a project and team. <span class='small'>Your email
		will only be used to login to the website.</span>
	</h2>
	<div class='block'></div>
	<form>
		<input type='text' placeholder='Email'></input>
		<input type='text' placeholder='Password'></input>
	</br>
		<button>Next</button>
	</form>
</div>
	
</body>
</html>
