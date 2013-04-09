<div class='halfbg'>
	<div id='c6'>
		<div class='container'>
			<h2>Student Requests</h2>
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
			
			$sql='SELECT * FROM accounts WHERE 	uid=:aid';
			$stmtsub=$conn->prepare($sql);
			$stmtsub->execute(array(
				':aid' => $aid
				));
			$rowsub=$stmtsub->fetch();
			$username=$rowsub['username'];
			$email=$rowsub['email'];
				echo "
				<div class='listcont'>
					<div id='entriesLeft'>
						<div class='subject' style='cursor: pointer;'>
							<h2>".$subject."</h2>
							<div class='entriesMore'>
								<h6>".$email."</h6>
								</br>
								<a href='resources/library/cancelRequest.php?rid=".$rid."'><h6>deny request</h6></a>
							</div>
						</div>
					</div>
				</div>
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