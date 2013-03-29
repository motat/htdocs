<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
//Get User ID in order to get Username from accounts table
$sql='SELECT * FROM entrys';
$stmt=$conn->prepare($sql);
$stmt->execute();
$row=$stmt->fetch();
$uid=$row['uid'];
//Get Username
$sql='SELECT * FROM accounts WHERE uid=:uid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
$row=$stmt->fetch();
$username=$row['username'];
//Get Subject
$sql='SELECT * FROM entrys';
$stmt=$conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount()> 0)
	{
		echo "<h2>all listings</h2>";
		//Get subject
		while($row=$stmt->fetch())
			{	
				$eid=$row['eid'];
				$subject=$row['subject'];
				echo "<span class='sub'>"; echo $subject; echo "</span> - <span class='dim'>"; echo $username; echo " <a href='resources/library/request.php?eid="; echo $eid; echo"'><span class='plus'> + </span></a><span class='minus'>-</span><a href='index.php?eid="; echo $eid; echo "'><span class='more'> > </span></a></span><br/>"; 
			}
	}
	else
	{
		echo "<h2>no listings</h2>";
	}
?>

