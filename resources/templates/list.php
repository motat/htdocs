<?php
if(isset($_GET['page']))
       { 
       $page = $_GET['page'];
       }
else
       {
       $page = 1;
       }
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
$sqlcounty='SELECT * FROM listings WHERE county = :county ORDER by createid DESC LIMIT %d,%d';
$sqlcounty= sprintf($sqlcounty, $start, $per_page);
//SQL IF NO COUNTY
$sqlnocounty='SELECT * FROM listings ORDER BY createid DESC LIMIT %d,%d';
$sqlnocounty= sprintf($sqlnocounty, $start, $per_page);
if (isset($_GET['county']) && $_GET['county'] != '')
    {
        $county=$_GET['county'];
        $stmt = $conn->prepare($sqlcounty);
        $stmt->execute(array('county' => $county));
    } else {

        $stmt = $conn->prepare($sqlnocounty);
        $stmt->execute();
    }

//while($row = mysql_fetch_array($sql))
while($row = $stmt->fetch()) 
    {
    $pay = $row['payment'];
if($pay=='yes')
    {
        $pay=' $';
    }
else
    {
        $pay='';
    }
    $uid=$row['id'];
    $sqlacc='SELECT * FROM accounts WHERE id=:uid';
    $stmtacc=$conn->prepare($sqlacc);
    $stmtacc->execute(array(
        ':uid' => $uid ));
    $rowacc=$stmtacc->fetch();
    $marks=$rowacc['marks'];
    $information=$row['information'];
    $information=substr($information,0,90).'...';;
    echo "
   
    <div class='listings'>
          <div id='wrapper'>
               <div id='mid'>
                    <h3>"; echo $row['firstname']; echo " (";echo $marks; echo " pts)</h3>
                    <h3>"; echo $pay; echo "</h3>
               </div>
          </div>
          <div id='left'>
               <h1>"?><?php echo $row['subject'];?> </h1>
               <div onclick="javascript:window.location.href='http://localhost/resources/library/postmark.php?createid=<?php echo $row['createid']; echo "&uid="; echo $row['id']; ?>'; return false;" style='cursor: pointer;' id='box2'></div> <?php echo"
          </div>
          <div id='right'>
               <h3><a style='color:white;' href='moreinfo.php?cid=";echo $row['createid']; echo"'>";?><?php echo $information;?><?php echo "</a></h3>
          </div>
    </div>
            ";
    }
    

   ?>