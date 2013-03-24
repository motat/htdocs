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
if ( $stmt->rowCount() > 0 )
    {
	echo " <div id='halfbar' ><h1>Your requested lessons</h1></div>";
while($row = $stmt->fetch())
    {
	$uid=$row['id'];
	$sqlacc='SELECT * FROM accounts WHERE id=:uid';
	$stmtacc=$conn->prepare($sqlacc);
	$stmtacc->execute(array(
	    ':uid' => $uid ));
	$rowacc=$stmtacc->fetch();
	$marks=$rowacc['marks'];
        $firstname = $row['firstname'];
	$prof = $row['prof'];
	$information = $row['information'];
	$information=substr($information,0,90).'...';;
        $subject = $row['subject'];
        $email = $row['email'];
	$autoid=$row['autoid'];
        echo "
            <div id='marklist'>
                <div id='marklistings'>
                    <div id='marklistleft'>
                        <h1>"; ?><?php echo $subject;?><?php echo "</h1>
                        <h3>by "; ?> <?php echo $prof;?><?php echo " (";echo $marks;echo " pts)</h3>                                  
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