<div class='nav'>
	<!--
	# PUBLIC BUTTON
	-->
	<div id='navbutton'>
		<h3><a href='public.php'>Public</a></h3>
	</div>
	<!--
	# PROFILE BUTTON
	-->
	<div id='navbutton'>
		<h3><a href='profile.php'>Profile</a></h3>
	</div>
	<!--
	# BACK
	-->
	<?php if(isset($_GET['page'])) { ?>
	<div id='navbutton2'>
		<h3><a href='teampage.php'> < Back to teampage</a></h3>
	</div>
	<?php } ?>
	<!--
	# LOGIN BUTTON
	-->
	<?php if(!isset($_SESSION['uid'])) { ?>
	<div id='navbutton'>
		<h3><a href='login.php'>Login</a></h3>
	</div>
	<?php } ?>
	<!--
	# LOGOUT BUTTON
	-->
	<?php if(isset($_SESSION['uid'])) { ?>
	<div id='navbutton'>
		<h3><a href='resources/templates/logout.php'>Logout</a></h3>
	</div>
	<?php } ?>
	<div class='clear'></div>
</div>