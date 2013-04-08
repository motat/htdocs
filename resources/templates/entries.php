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
				
				for($i=1;$i<10;$i++)
					{
						$row=$stmt->fetch();
				$uid=$row['uid'];
				$information=$row['information'];
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
									<div class='subject' style='cursor: pointer;' id=".$i." onclick='showdiv(this);'>
										<h4>".$subject."</h4>
									</div>
									<div class='entriesMore' id=more".$i.">
										<h6>".$information."</h6>
										</br>
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