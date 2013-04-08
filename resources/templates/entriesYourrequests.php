<div class='r2'>
	<div class='backdrop'>
	<div class='container'>
		<h2>Yours Requests</h2>
	</div>
	<div id='entries'>
		
<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
if(isset($_SESSION['uid']))
{
$uid=$_SESSION['uid'];
$sql='SELECT * FROM requests WHERE aid=:uid ORDER BY rid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));

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
		$information=$row1['information'];
		$payment=$row1['payment'];
			
			$sql='SELECT * FROM accounts WHERE uid=:aid';
			$stmtsub=$conn->prepare($sql);
			$stmtsub->execute(array(
				':aid' => $aid
				));
			$rowsub=$stmtsub->fetch();
			$username=$rowsub['username'];
				echo "
					<div id='entriesLeft'>
						<div class='subject' style='cursor: pointer;'>
							<h4>".$subject."</h4>
							<div class='entriesMore'>
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
			}	

			
?>
	</div>
</div>
</div>
