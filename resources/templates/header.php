<div class='header'>
	<div class='c0'>
		<div id='c1'>
			<div class='paddedbox'>
				<span class='small'>
					<?php if(!isset($_SESSION['uid']))
					{ 
					?>
					<!--########
					#
					# LOGGED OUT
					#	MENU
					##########-->
					<a href='#' class='shRegister'>register</a>
					<a href='#' class='showhide'>login</a>
					<a href='index.php'>browse</a>
					<?php 
					} 
					else 
					{ 
					?>
					<!--########
					#
					# LOGGED IN
					#	MENU
					##########-->
					<a href='index.php'>browse</a> 
					<a href='panel.php'>| manage lessons</a> 
					<a href='#' class='shAccount'>| account</a> 
					<a href='resources/library/logout.php' class='showhide'>| logout</a>
					<?php 
					} 
					?>
				</span>
			</div>
		</div>
		<div id='c2'>
			<a href='index.php'>
			<h1>Ah<span class='whiteLogo'>h</span><span class='redLogo'>y</span>es</h1><h3>beta</h3>
			</a>
		</div>
	</div>
</div>