<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$sql='SELECT * FROM entrys ORDER BY eid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount()> 0)
	{
		echo "<h2>all listings</h2>";
		//Get subject
		$i = 1;
		while($row=$stmt->fetch())
			{	
				$eid=$row['eid'];
				$subject=$row['subject'];
				$username=$row['username'];
				if($i%2 == 1) $color = 'lred';
				else $color = 'lgreen';
				echo "
				<div id='"; echo $color; echo"'>
					<span class='sub'>".$subject."</span> - <span class='dim'>"; echo $username; echo " <a href='resources/library/request.php?eid="; echo $eid; echo"'><span class='plus'> + </span></a><span class='minus'>-</span><a href='?eid="; echo $eid; echo "'><span class='more'> > </span></a></span>
				</div><br/>";
				$i++;
					
			}
	}
	else
	{
		echo "<h2>no listings</h2>";
	}
?>

