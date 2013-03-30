<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
if(isset($_SESSION['uid']))
{
	$aid=$_SESSION['uid'];
}
else
{
	$aid='no';
}

$sql='SELECT * FROM requests WHERE aid=:aid ORDER BY rid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':aid' => $aid
	));
if($stmt->rowCount()> 0)
	{
		echo "<h2>student requests</h2>";
		//Get subject
		$i = 1;
		while($row=$stmt->fetch())
			{	
				$eid=$row['eid'];
				$username=$row['username'];
				$subject=$row['subject'];
				$rid=$row['rid'];
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
		echo "<h2>no students have requested you</h2>";
	}
?>

