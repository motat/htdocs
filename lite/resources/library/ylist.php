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
$sql='SELECT * FROM entrys WHERE uid=:uid AND vis=:vis ORDER BY eid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid,
	':vis' => '1'
	));
if($stmt->rowCount()> 0)
	{
		echo "<h2>your listings</h2>";
		//Get subject
		$i = 1;
		while($row=$stmt->fetch())
			{	
				$eid=$row['eid'];
				$subject=$row['subject'];
				if($i%2 == 1) $color = 'lred';
				else $color = 'lgreen';
				echo "
				<div id='"; echo $color; echo"'>
					<span class='sub'>"; echo $subject; echo "</span> - <span class='dim'>"; echo $username; echo " <a href='resources/library/del.php?eid="; echo $eid; echo"'><span class='minus'>-</span></a><a href='index.php?eid="; echo $eid; echo "'><span class='more'> > </span></a></span><br/>
				</div>";
				$i++;
			}
	}
	else
	{
		echo "<h2>you have no listings</h2>";
	}
?>

