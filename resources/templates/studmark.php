<?php
//Count Rows
$stmt1 = $conn->prepare('SELECT COUNT(*) FROM marks');
$stmt1->execute();
$num = $stmt1->fetchColumn();
//Query DB to get results
$id = $_SESSION['id'];
$sql = 'SELECT * FROM marks WHERE markid = %d ORDER BY createid ASC';
$sql = sprintf($sql,$id);
$stmt = $conn->prepare($sql);
$stmt->execute();
if ( $num > 0)
    {
	echo " <div id='halfbar' ><h1>Your requested lessons</h1></div>";
while($row = $stmt->fetch())
    {
        $firstname = $row['firstname'];
	$prof = $row['prof'];
	$information = $row['information'];
        $subject = $row['subject'];
        $email = $row['email'];
	$autoid=$row['autoid'];
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
		<a style='display:inline-block' href='resources/library/dropstudlist.php?autoid=";?><?php echo $autoid; echo "'?><div id='box'><h1></h1></div></a>		
            </div>";
                        }
    }
?>