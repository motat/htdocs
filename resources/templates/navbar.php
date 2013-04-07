<div id='c1'>
	<div id='menu'>
		<br/>
		<h5><?php if(isset($_SESSION['uid'])) { ?>account<?php } else { ?> menu <?php } ?></h5>
		<div id='navSide'>
			<h4><?php if(!isset($_SESSION['uid'])) { ?><a href='#' class='shRegister'>register</a> <a href='#' class='showhide'>login</a><?php } else { ?> <a href='#' class='shAdd'>add</a> <a href='resources/library/logout.php' class='showhide'>all</a> <a href='resources/library/logout.php' class='showhide'>logout</a><?php } ?></h4>
		</div>
	</div>
</div>