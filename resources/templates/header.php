<div id='c1'>
	<div id='menu'>
		<br/>
		<h5>menu</h5>
		<div id='navSide'>
			<h4><?php if(!isset($_SESSION['uid'])) { ?><a href='#' class='shRegister'>register</a> <a href='#' class='showhide'>login</a> <a href='index.php'>entries</a><?php } else { ?> <a href='index.php'>entries</a> <a href='#' class='shentriesPanel'>lessons</a> <a href='panel.php'>yours</a> <a href='#' class='shAccount'>account</a> <a href='resources/library/logout.php' class='showhide'>logout</a><?php } ?></h4>
		</div>
	</div>
</div>
<div id='c2'>
	<?php if(isset($_SESSION['uid'])){ ?><a href='index.php'><?php } else { ?><a href='intro.php'><?php } ?><h1>Ah<span class='whiteLogo'>h</span><span class='redLogo'>y</span>es</h1><h3>beta</h3></a>
</div>
<div id='c3'>
	<br/>
	<div id='quoteHeader'>
		<h3>True knowledge exists in</h3>
		<h3>knowing that you know</h3>
		<h3>nothing.</h3>
	</div>
	<div id='quoteAuthor'>
		<br/>
		<h3>-Socrates</h3>
	</div>
</div>