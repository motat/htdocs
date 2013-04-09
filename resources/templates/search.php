<?php 
if(isset($_POST['submit']))
{  
    $search="%{$_POST['search']}%"; 
    $sql="SELECT  * FROM entrys WHERE subject LIKE :search";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
		':search' => $search
		));
    if ( $stmt->rowCount() > 0)
    {
?>
<div class='halfbg'>
	<div id='c5'>
		<div class='container'>
			<h2>Everything</h2>
		</div>
		<div id='entries'>
<?php

		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			$uid=$row['uid'];
				$eid=$row['eid'];
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
		    //-display the result of the array 
		    echo " 
							<div class='listcont'>
								<div id='entriesLeft'>
									<div class='subject' style='cursor: pointer;'>
										<h4>".$subject."</h4>
										<div class='entriesMore' >
											<h6>".$information."</h6>
											</br>
											<h6>".$payment."</h6>
											</br>
											<a href='resources/library/requestLesson.php?eid=".$eid."'><h6>request lesson</h6></a>
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
	header("location:$root/search.php?pageid=1");
    }
}


	?> 