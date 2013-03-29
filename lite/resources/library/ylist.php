<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
if(isset($_SESSION['uid']))
{
	$uid=$_SESSION['uid'];
}
else
{
	$uid='no';
}
//Get Username associated with 'uid'
$sql='SELECT * FROM accounts WHERE uid=:uid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
$row=$stmt->fetch();
$username=$row['username'];
//Check if results
$sql='SELECT * FROM entrys WHERE uid=:uid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
if($stmt->rowCount()> 0)
	{
		echo "<h2>your listings</h2>";
		//Get subject
		while($row=$stmt->fetch())
			{	
				$subject=$row['subject'];
				echo "<span class='sub'>"; echo $subject; echo "</span> - <span class='dim'>"; echo $username; echo " <span class='plus'> + </span><span class='minus'>-</span><span class='more'> > </span></span><br/>"; 
			}
	}
	else
	{
		echo "<h2>you have no listings</h2>";
	}
?>

