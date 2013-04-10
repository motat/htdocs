<div class='header'>
	<div class='c0'>
		<div id='c1'>
			<div id='menu'>
				<h2>menu</h2>
				<div id='navSide'>
					<span class='mediumlite'>
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
						<a href='index.php'>entries</a>
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
						<a href='index.php'>entries</a> 
						<a href='#' class='shentriesPanel'>lessons</a> 
						<a href='panel.php'>yours</a> 
						<a href='#' class='shAccount'>account</a> 
						<a href='resources/library/logout.php' class='showhide'>logout</a>
						<?php 
						} 
						?>
					</span>
				</div>
			</div>
		</div>
		<div id='c2'>
			<?php
			if(isset($_SESSION['uid']))
			{ 
			?>
			<a href='index.php'>
			<?php 
			} 
			else 
			{ 
			?>
			<a href='intro.php'>
			<?php
			}
			?>
			<h1>Ah<span class='whiteLogo'>h</span><span class='redLogo'>y</span>es</h1><h3>beta</h3>
			</a>
		</div>
		<div id='c3'>
			<div class='paddedbox'>
			<p><span class='small'>
			True knowledge</br>exists in
			knowing that you</br>know
			nothing.
			</br>
			-Socrates
			</span></p>
			</div>
		</div>
	</div>
</div>