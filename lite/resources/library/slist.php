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

$sql='SELECT * FROM requests WHERE aid=:uid ORDER BY rid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
if($stmt->rowCount()> 0)
	{
		echo "<h2>students requesting you</h2>";
		//Get subject
		$i = 1;
		while($row=$stmt->fetch())
			{	
				$eid=$row['eid'];
				$aid=$row['aid'];
				$rid=$row['rid'];
				$sql='SELECT * FROM accounts where uid=:aid';
				$stmtu=$conn->prepare($sql);
				$stmtu->execute(array(
					':aid' => $aid
					));
				$rowu=$stmtu->fetch();
				$username=$rowu['username'];
				$sql='SELECT * FROM entrys where eid=:eid';
				$stmtsu=$conn->prepare($sql);
				$stmtsu->execute(array(
					':eid' => $eid
					));
				$rowsu=$stmtsu->fetch();
				$subject=$rowsu['subject'];
				if($i%2 == 1) $color = 'lred';
				else $color = 'lgreen';
				echo "
				<div id='"; echo $color; echo"'>
					<span class='sub'>"; echo $subject; echo "</span> - <span class='dim'>"; echo $username; echo " <a href='resources/library/delreq.php?rid="; echo $rid; echo"'><span class='minus'>-</span></a><span class='more'> > </span></span><br/> 
				</div>";
				$i++;
			}
	}
	else
	{
		echo "<h2>no students have requested you yet</h2>";
	}
?>

