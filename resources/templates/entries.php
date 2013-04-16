<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$county=$_SESSION['county'];
$sql='SELECT * FROM entrys WHERE vis=:vis AND county=:county ORDER BY eid DESC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':vis' => '1',
	':county' => $county));
if($stmt->rowCount()> 0)
	{
		if($county=='oc')
		{
			$county='Orange County';
		}
?>
<div class='container'>
	<div id='c4'>
		<div class='paddedbox'>
			<h3>Everything - <?php echo $county; ?> - <a href='resources/library/logout.php'><span class='small'>change county</span></a></h3>
			<div class='paddedbox'>
<?php
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
					<div class='entriesMore' >
						<h6>".$information."</h6>
						</br>
						<h6>".$payment."</h6>
						</br>";
						if(isset($_SESSION['uid']))
						{
							echo"
								<div class='button'>
									<a href='resources/library/requestLesson.php?eid=".$eid."'><span class='medium'>request lesson</span></a>
								</div>
								";
						}
				echo"
					</div>
				</div>
			</div>
		</div>
		<div id='entriesRight'>
			<a href='userinfo.php?user=".$uid."'><h4>".$username."</h4></a>
		</div>
		<div style='clear:both;'></div>";
	}			
?>


		</div>
	</div>
</div>
<?php
}
else
{
	echo "<div class='container'>
			<div id='c4'>
				<div class='paddedbox'>
					<h3>Unfortunately, this county does not have any listings submitted for it, you could be the first to create a lesson for your county by clicking the 'manage lessons' link above. You can also change your county by clicking <a href='resources/library/logout.php'><span class='medium'>here</span></a></h3>
				</div>
			</div>
		</div> ";
}
?>