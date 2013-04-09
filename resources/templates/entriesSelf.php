<div class='halfbg'>
	<div id='c6'>
		<div class='container'>
			<h2>Your Lessons</h2>
		</div>
		<div id='entries'>
<?php
if(isset($_SESSION['uid']))
{
	require_once(realpath(dirname(__FILE__) . "/../config.php"));
	$uid=$_SESSION['uid'];
	$sql='SELECT * FROM entrys WHERE uid=:uid AND vis=:vis ORDER BY eid DESC';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
		':uid' => $uid,
		':vis' => '1'
		));
	while($row=$stmt->fetch())	
		{
		$uid=$row['uid'];
		$information=$row['information'];
		$payment=$row['payment'];
		$subject=$row['subject'];
		$eid=$row['eid'];
		$sql='SELECT * FROM accounts WHERE uid=:uid';
		$stmtu=$conn->prepare($sql);
		$stmtu->execute(array(
			':uid' => $uid
			));
		$rowu=$stmtu->fetch();
		$username=$rowu['username'];
			echo "

				<div class='listcont'>
					<div id='entriesLeft'>
						<div class='subject' style='cursor: pointer;'>
							<h2>".$subject."</h2>
							<div class='entriesMore'>
								<h6>".$information."</h6>
								</br>
								<h6>".$payment."</h6>
								</br>
								<a href='resources/library/deleteLesson.php?eid=".$eid."'><span class='h7'>delete</span></a>
								</br>
							</div>
						</div>
					</div>
					<div id='entriesRight'>
						<a href='userinfo.php?user=".$uid."'><h4>".$username."</h4></a>
					</div>
					<div style='clear:both;'></div>
				</div>
			";
		}	
}
?>
</div>
</div>
</div>
