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
	echo " <div id='halfbar'><h6>Requested lessons</h6></div>";
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
            <div class='listings'>
                <div id='wrapper'>
                    <div id='mid'>
                        <h3>by "; ?> <?php echo $prof;?><?php echo " (";echo $marks;echo " pts)</h3>                                  
                    </div>
                </div>
                <div id='left'>
                    <h1>"; ?><?php echo $subject;?> </h1>
                    <div onclick="javascript:window.location.href='resources/library/dropstudlist.php?autoid=<?php echo $autoid;?>'; return false;" style='cursor: pointer;' id='box2'></div><?php echo "
                </div>
                <div id='right'>
                    <h3>"; ?><?php echo $information;?><?php echo "</h3>
                </div>	
            </div>
            ";
                        }
    }
?>