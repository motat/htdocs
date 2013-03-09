<?php
    
$sql = "SELECT * FROM marks WHERE markid= '" . $_SESSION['id'] . "' ORDER BY createid ASC";
$query = mysql_query($sql);
if ( mysql_num_rows( $query ) > 0 )
        {
            echo " <div id='halfbar' ><h1>Your requested lessons</h1></div>";
while($row = mysql_fetch_array($query))
    {
        $firstname = $row['firstname'];
	$prof = $row['prof'];
	$information = $row['information'];
        $subject = $row['subject'];
        $email = $row['email'];
        echo "
            <div id='marklist'>
                <div id='marklistings'>
                    <div id='marklistleft'>
                        <h1>Professor"; ?> <?php echo $prof;?><?php echo "</h1>
                        <h3> "; ?><?php echo $subject;?><?php echo "</h3>                                  
                    </div>
                    <div id='marklistright'>
                        <h4>"; ?><?php echo $information;?><?php echo "</h4>
                    </div>
                </div>
		<a style='display:inline-block' href='resources/library/dropmarkpost.php?firstname=";?><?php echo $firstname;?><?php echo "&subject="; echo $subject;?><?php echo "&email="; echo $email; echo "'?><div id='box'><h1></h1></div></a>		
            </div>";
                        }
	}
?>