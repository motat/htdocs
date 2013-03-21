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
		    <a href='#'><span class='rate'>Good</span></a> <a href='#'><span class='rate'>Bad</span></a> <a href='#'><span class='rate'>Not Taken</span></a>
		</div>
	    </div>";
                        }
    }
?>