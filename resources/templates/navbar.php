<div id='c1'>
	<div id='menu'>
		<br/>
		<h5>menu</h5>
		<div id='navSide'>
			<h4><?php if(!isset($_SESSION['uid'])) { ?><a href='#' class='shRegister'>register</a> <a href='#' class='showhide'>login</a> <a href='index.php'>entries</a><?php } else { ?> <a href='index.php'>entries</a> <a href='#' class='shentriesPanel'>manage</a> <a href='#' class='shAccount'>account</a> <a href='resources/library/logout.php' class='showhide'>logout</a><?php } ?></h4>
		</div>
	</div>
</div>