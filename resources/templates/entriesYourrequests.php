<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$uid=$_SESSION['uid'];

$sql='SELECT * FROM requests WHERE aid=:uid ORDER BY rid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));
?>
<div class='r3'>
	<div class='container'>
		<h2>Your Requests</h2>
	</div>
	<div id='entries'>
<?php
				
				for($i=1;$i<10;$i++)
					{
				$row=$stmt->fetch();
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
						$sql='SELECT * FROM accounts WHERE uid=:aid';
						$stmtsub=$conn->prepare($sql);
						$stmtsub->execute(array(
							':aid' => $aid
							));
						$row=$stmtsub->fetch();
						$username=$row['username'];

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
