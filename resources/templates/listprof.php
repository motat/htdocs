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
    echo " <div id='halfbar'><h6>Your Listings</h6></div>";
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
                <div class='listings'>
                      <div id='wrapper'>
                           <div id='mid'>
                                <h3>"; echo $row['firstname']; echo " (";echo $marks; echo " pts)</h3>
                                <h3>"; echo $row['payment']; echo "</h3>
                           </div>
                      </div>
                      <div id='left'>
                           <h1>"; echo $row['subject']; echo "</h1><a href='edit.php?cid="; echo $row['createid'];?> '><span class='edit'>Edit &nbsp; </span></a>
                          <div onclick="javascript:window.location.href='http://localhost/resources/library/droplist.php?autoid=<?php echo $row['createid']; ?>'; return false;" style='cursor: pointer;' id='box2'></div> <?php echo"
                      </div>                      
                      <div id='right'>
                           <h3><a style='color:white;' href='moreinfo.php?cid=";echo $row['createid']; echo"'>";echo $information; echo "</a></h3>
                      </div>
                </div>                
                    ";
            }
        }
?>