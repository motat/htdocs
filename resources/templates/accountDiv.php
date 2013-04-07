<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
if(!isset($_SESSION['uid']))
{
	$username='no';
	$email='no';
}
else
{
	$uid=$_SESSION['uid'];
	$sql='SELECT * FROM accounts WHERE uid=:uid';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
		':uid' => $uid
		));
	$row=$stmt->fetch();
	$username=$row['username'];
	$email=$row['email'];
}
?>
<div class='account'>
	<div id='arrow'>
		<h1><a href='#' class='shAccount'>^</a></h1>
	</div>
	<div id='entries'>
		<div class='right'>
			<form action="resources/library/changePassword.php" method="POST">
                <input type="text" name="password" placeholder='New Password'/>
                <button type='submit' class='btn'>Change Password</button>
            </form>
            <form action="resources/library/changeEmail.php" method="POST">
                <input type="text" name="email" placeholder='New Email'/>
                <button type='submit' class='btn'>Change Emai</button> 
			</form>
		</div>
		<div class='left'>
			<h2>Account.</h2>
			<br/>
			<h4><?php echo $username; ?></h4>
			<h4><?php echo $email; ?></h4>
			<h4>100%</h4>
		</div>
		<div style='clear:both;'></div>
	</div>
</div>
