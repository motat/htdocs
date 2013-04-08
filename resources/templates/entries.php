<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$sql='SELECT * FROM entrys ORDER BY eid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount()> 0)
	{
?>
<div class='r2'>
	<div class='container'>
		<h2>Everything</h2>
	</div>
	<div id='entries'>
<?php
	while($row=$stmt->fetch())
	{
				$uid=$row['uid'];
				$information=$row['information'];
				$payment=$row['payment'];
				$subject=$row['subject'];
				$sql='SELECT * FROM accounts WHERE uid=:uid';
				$stmtu=$conn->prepare($sql);
				$stmtu->execute(array(
					':uid' => $uid
					));
				$rowu=$stmtu->fetch();
				$username=$rowu['username'];
						echo "
								<div id='entriesLeft'>
									<div class='subject' style='cursor: pointer;'>
										<h4>".$subject."</h4>
										<div class='entriesMore' >
											<h6>".$information."</h6>
											</br>
											<h6>".$payment."</h6>
										</div>
									</div>
								</div>
								</br>
								<div id='entriesRight'>
									<a href='userinfo.php?user=".$uid."'><h4>".$username."</h4></a>
								</div>

								<div style='clear:both;'></div>";
	}			
?>
	</div>
</div>
<?php
	}
	else
	{
		echo "<h2>no listings</h2>";
	}
	?>