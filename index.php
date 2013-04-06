<?php session_start();?>
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Lite V</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
		//MENU fade
		$(document).ready(function() {
		  $("#menu").hover(
		    function(e) { 
		      $("#navSide").fadeIn("slow");
		    },
		    function(e) {
		      $("#navSide").fadeOut("slow");    
		    }
		  );
		});
		//QUOTE fade
		$(document).ready(function() {
		  $("#quoteHeader").hover(
		    function(e) { 
		      $("#quoteAuthor").fadeIn("slow");
		    },
		    function(e) {
		      $("#quoteAuthor").fadeOut("slow");    
		    }
		  );
		});
	$(document).ready(function(){
	 
	        $(".login").hide();
	        $(".showhide").show();

	 
	    $('.showhide').click(function(){
	    $(".login").slideToggle();
	    });
	 
	});
	$(document).ready(function(){
	 
	        $(".login").hide();
	        $(".shLogin").show();

	 
	    $('.shLogin').click(function(){
	    $(".login").slideToggle();
	    });
	 
	});
	$(document).ready(function(){
	 
	        $(".register").hide();
	        $(".shRegister").show();

	 
	    $('.shRegister').click(function(){
	    $(".register").slideToggle();
	    });
	 
	});

	</script>
</head>
<body>
<div class='header'>
	<div class='container'>
		<div id='c1'>
			<div id='menu'>
				<br/>
				<h5>menu</h5>
			</div>
			<div id='navSide'>
				<h4><a href='#' class='shRegister'>register</a> <a href='#' class='showhide'>login</a></h4>
			</div>
		</div>
		<div id='c2'>
			<a href='intro.php'><h1>Ah<span class='whiteLogo'>h</span><span class='redLogo'>y</span>es</h1></a>
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
	</div>
</div>
<div class='login'>
	<div id='arrow'>
			<a href='#' class='shLogin'><h1>^</h1></a>
		</div>
	<div style='clear:both;'></div>
	<div id='entries'>
		<div class='right'>
			<form action="resources/library/login.php" method="POST">
				<input name='username' placeholder='Username'>
				<input name='password' placeholder='Password'>
				<button type='Submit'>Submit</button>
			</form>
		</div>
		<div class='left'>
			<h2>Login.</h2>
			<br/>
			<h4>When you login, a wide variety of tools are available for you. Manage your lessons or classes, or browse for some topics that might interest you!</h4>
		</div>
		<div style='clear:both;'></div>
	</div>
</div>
<div class='register'>
	<div id='arrow'>
			<a href='#' class='shRegister'><h1>^</h1></a>
		</div>
	<div style='clear:both;'></div>
	<div id='entries'>
		<div class='right'>
			<form action="resources/library/register.php" method="POST">
				<input name='username' placeholder='username'>
				<input name='password' placeholder='password'>
				<input name='email' placeholder='email'>
				<button type='Submit'>Submit</button>
			</form>
		</div>
		<div class='left'>
			<h2>Register.</h2>
			<br/>
			<h4>Creating an account means that you are ready to teach, and to learn. Clicking the submit button means you read the TOS</h4>
		</div>
		<div style='clear:both;'></div>
	</div>
</div>
	<?php require_once('resources/templates/entries_all.php'); ?>
<div class='r3'>
	<div id='entries'>
		<h2>Your Lessons</h2>
	</br>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div style='clear:both;'></div>
	</div>
</div>
<div class='r2'>
	<div id='entries'>
		<h2>Everything</h2>
	</br>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div style='clear:both;'></div>
	</div>
</div>
<div class='r3'>
	<div id='entries'>
		<h2>Your Lessons</h2>
	</br>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div id='entriesLeft'>
			<h4>css web design for advanced web developers</h4>
		</div>
		<div id='entriesRight'>
			<h4>motat</h4>
		</div>
		<div style='clear:both;'></div>
	</div>
</div>
<div class='footerbg'>
	<div class='footer'>
		<div id='c1'>
			<h5>stuff</h5>
			<h3>tos</h3>
			<h3>help</h3>
		</div>
		<div id='c2'>
			<h5>media</h5>
			<h3>facebook</h3>
			<h3>twitter</h3>
		</div>
		<div id='c3'>
			<h5>ahhyes.org</h5>
			<h3>contact</h3>
			<h3>about</h3>
			<h3>partnering</h3>
		</div>
	</div>
</div>
</body>
</html>
