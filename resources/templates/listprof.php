<?php
if(isset($_GET['page']))
    {
    $page = $_GET['page'];
    }
else
    {
    $page = 1;
    }
$id = $_SESSION['id'];
//SELECT ROWS
$stmt1 = $conn->prepare('SELECT COUNT(*) FROM listings');
$stmt1->execute();
$num = $stmt1->fetchColumn();
//PAGE PARAM
$per_page = "5";
$last_page = ceil($num/$per_page);
$first_page = "1";
$start = ($page-1)*$per_page;
//SQL IF COUNTY SPECIFIED
//$limit = "LIMIT $start, $per_page";
//$sql = "SELECT * FROM listings WHERE id= '" . $_SESSION['id'] . "' ORDER BY createid DESC $limit";
//$query = mysql_query($sql);
$sql = 'SELECT * FROM listings WHERE id = :id ORDER BY createid DESC LIMIT %d,%d';
$sql = sprintf($sql,$start, $per_page);
$stmt = $conn->prepare($sql);
$stmt->execute(array('id' => $id));
if ( $stmt->rowCount() > 0)
    {
    echo " <div id='halfbar' ><h1>Your Listings</h1></div>";
    while($row = $stmt->fetch())
        {
            $uid=$row['id'];
            $sqlacc='SELECT * FROM accounts WHERE id=:uid';
            $stmtacc=$conn->prepare($sqlacc);
            $stmtacc->execute(array(
                ':uid' => $uid ));
            $rowacc=$stmtacc->fetch();
            $marks=$rowacc['marks'];
            $information=$row['information'];
            $information=substr($information,0,90).'...';
            echo "
                <div id='proflist'>
                    <div id='proflistings'>
                        <div id='proflistleft'>
                            <h1>"; echo $row['subject']; echo "</h1>
                            <span class='h2'>by</span><span class='h5'>"; echo $row['firstname']; echo " ("; echo $marks; echo " pts) </span><a href='edit.php?cid="; echo $row['createid']; echo"'><span class='edit'>Edit</span></a>                                        
                        </div>
                        <div id='proflistright'>
                            <h4>"; echo $row['information'];echo "</h4>
                        </div>
                    </div>
                    <a style='display:inline-block' href='resources/library/droplist.php?createid="; echo $row['createid']; echo "'?><div id='box'><h1></h1></div></a>
                </div>
                    ";
            }
        }
?>