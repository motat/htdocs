<?php

//Query DB to get results
$id = $_SESSION['id'];
$sql = 'SELECT * FROM recents WHERE uid = %d ORDER BY createid ASC';
$sql = sprintf($sql,$id);
$stmt = $conn->prepare($sql);
$stmt->execute();
if ( $stmt->rowCount() > 0 )
    {
	echo " <div id='halfbar' ><h6>Rate your Professor</h6></div>";
while($row = $stmt->fetch())
    {
        $firstname=$row['firstname'];
	$subject=$row['subject'];
	$recentid=$row['rid'];
        echo "
	    <div class='listings'>
			<div id='wrapper'>
		    	<div id='mid'>
					<h3>";echo $firstname; echo "</h3>
		    	</div>
		    </div>
		    	<div id='left'>
		    		<h1>Professor ";echo $subject; echo "</h1>
		    	</div>
		    	<div id='right'>
		    		<div class='pad'>
		    			<a href='http://<?php echo $root;?>/resources/library/droprecent.php?rate=1&recentid=";echo $recentid; echo "'><font color='black'>Good</font></a> &bull; <a href='resources/library/droprecent.php?rate=0&recentid=";echo $recentid; echo "'><font color='black'>Not Taken</font></a> &bull; <a href='resources/library/droprecent.php?rate=-1&recentid=";echo $recentid; echo "'><font color='black'>Bad</font></a> 
		    		</div>
		    	</div>
	    </div>";
    }
    }
?>