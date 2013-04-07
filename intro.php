<?php session_start();?>
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Lite V</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script language="javascript"> 
		function toggle2(showHideDiv, switchTextDiv) {
			var ele = document.getElementById(showHideDiv);
			var text = document.getElementById(switchTextDiv);
			if(ele.style.display == "block") {
		    		ele.style.display = "none";
		  	}
			else {
				ele.style.display = "block";
			}
		} 
	</script>
</head>
<body>
<div class='introContainer'>
	<div id='welcome'>
		<h2>Welcome</h2>
		</br>
		<h4>We at ahhyes.org would like to welcome you to our community</h4>
	</div>
	<div id='quoteIntro'>
			<h2>True knowledge exists in</h2>
			<h2>knowing that you know</h2>
			<h2>nothing.</h2>
	</div> 
	<div stlye='clear:both;'></div>
	<div id='button'>
		<a href='index.php'><img style='margin-top:10px;' src='css/images/hy.png'></a>
	</div>
	<div id='welcome'>
		<h2>Knowledge</h2>
		</br>
		<h4>We believe that knowledge is a limitless currency, and we want to help you earn it.</h4>
	</div>
	<div id='loginIntro'>
		<form action="resources/library/login.php" method="POST">
			<input name='username' placeholder='Username'>
			<input name='password' placeholder='Password'>
		</br>
			<button type='Submit'>Login</button>
		</form>
	</div> 
</div>


</body>
</html>
