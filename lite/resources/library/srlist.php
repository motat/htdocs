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

$sql='SELECT * FROM requests WHERE uid=:uid ORDER BY rid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
if($stmt->rowCount()> 0)
	{
		echo "<h2>your requests</h2>";
		//Get subject
		$i = 1;
		while($row=$stmt->fetch())
			{	
			$eid=$row['eid'];
			$aid=$row['aid'];
			$rid=$row['rid'];
				$sql='SELECT * FROM entrys WHERE eid=:eid';
				$stmtun=$conn->prepare($sql);
				$stmtun->execute(array(
					':eid' => $eid
					));
				$row1=$stmtun->fetch();
				$subject=$row1['subject'];
				$sql='SELECT * FROM accounts WHERE uid=:aid';
				$stmtsub=$conn->prepare($sql);
				$stmtsub->execute(array(
					':aid' => $aid
					));
				$row=$stmtsub->fetch();
				$username=$row['username'];
				if($i%2 == 1) $color = 'lred';
				else $color = 'lgreen';
				echo "
				<div id='"; echo $color; echo "'>
					<span class='sub'>"; echo $subject; echo "</span> - <span class='dim'>"; echo $username; echo " <a href='resources/library/delreq.php?rid="; echo $rid; echo"'><span class='minus'>-</span></a><span class='more'> > </span></span><br/> 
				</div>";
				$i++;
			}
	}
	else
	{
		echo "<h2>you have not requested a lesson yet</h2>";
	}
?>

