<?php

//Query DB to get results
$id = $_SESSION['id'];
$sql = 'SELECT * FROM recents WHERE uid = %d ORDER BY createid ASC';
$sql = sprintf($sql,$id);
$stmt = $conn->prepare($sql);
$stmt->execute();
if ( $stmt->rowCount() > 0 )
    {
	echo " <div id='halfbar' ><h1>Rate you Professor</h1></div>";
while($row = $stmt->fetch())
    {
        $firstname=$row['firstname'];
	$subject=$row['subject'];
	$recentid=$row['rid'];
        echo "
	    <div id='recent'>
		<div id='recentbox'>
		    <div id='recentleft'>
			<h1>";echo $subject; echo " by</h1>
		    </div>
		    <div id='recentright'>
			<h2>Professor ";echo $firstname; echo "</h2>
		    </div>
		</div>
		<div id='recentrate'>
		    <a href='resources/library/droprecent.php?rate=1&recentid=";echo $recentid; echo "'><span class='good'>Good</span></a> &bull; <a href='resources/library/droprecent.php?rate=0&recentid=";echo $recentid; echo "'><span class='nottaken'>Not Taken</span></a> &bull; <a href='resources/library/droprecent.php?rate=-1&recentid=";echo $recentid; echo "'><span class='bad'>Bad</span></a> 
		</div>
	    </div>";
                        }
    }
?>