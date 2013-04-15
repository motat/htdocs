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
			<h3>Everything - <?php echo $county; ?></h3>
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
								<a href='resources/library/requestLesson.php?eid=".$eid."'><span class='h7'>request lesson</span></a>
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
	echo "<h2>no listings</h2>";
}
?>