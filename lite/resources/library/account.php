<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
if(isset($_SESSION['uid']))
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
?>
<div id='left'>
	<a href='resources/library/logout.php'><h2>Logout</h2></a>
</div>
<div id='uinfo'>
	<h5><?php echo $username; ?></h5>
</div>
<div id='uinfo'>
	<h5><?php echo $email; ?></h5>
</div>
<form action="resources/library/add.php" method="POST"> 
    <input type="text" name="email" placeholder='Change email'/>
    <button type='submit' class='btn'>Edit Email</button>            
</form>
<?php
	}
	else
	{
		echo "no logged in enough to see account panel, try harder noob cakes~";
	}

?>