<?php session_start();?>
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
include 'resources/config.php';
?>
<head>
	<link rel="icon" 
      type="image/png" 
      href="images/myicon.png">
    <title><?php echo $webname;?></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="scripts/js.js"></script>
</head>
		<?php require_once('resources/library/countyCheck.php'); ?>
<body>
<?php include_once("resources/templates/googleAna.php"); ?>
<div class='main'>	
	<div class='header'>
		<div class='container'>
			<div id='cholder'>
			<?php require_once('resources/templates/navbar.php'); ?>
			<?php require_once('resources/templates/logo.php'); ?>
			<?php require_once('resources/templates/quote.php'); ?>
			</div>
		</div>
	</div>
		<?php require_once('resources/templates/requireonce.php'); ?>
		<?php require_once('resources/templates/aboutDiv.php'); ?>
		<?php require_once('resources/templates/footer.php'); ?>
</div>
</body>
</html>
