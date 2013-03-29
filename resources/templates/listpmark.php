<?php
if(isset($_SESSION['id']))
    {
    $id = $_SESSION['id'];
    $sql = 'SELECT * FROM marks WHERE id= :id ORDER BY createid ASC';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam( ":id",$id,PDO::PARAM_INT);
    $stmt->execute();
    if ($stmt->rowCount() > 0)
        {      
            echo "
           
            <div class='smallplus'>
                <div class='pad'>
                    <h3>Clicking the <div id='box'>&nbsp;</div> will remove your listings or a students request for you.</h3>
                    <h3>Pressing the Edit text will bring you to a page where you can edit the selected listing.</h3>
                </div>
            </div>
            <div id='halfbar'><h6>Student Requests</h6></div>
           ";
        }
        else
        {
            echo "
           
             <div class='smallplus'>
                <div class='pad'>
                    <h3>Clicking the <div id='box'>&nbsp;</div> will remove your listings or a students request for you.</h3>
                    <h3>Pressing the Edit text will bring you to a page where you can edit the selected listing.</h3>
                </div>
            </div>";
        }
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
        $subject = $row['subject'];
        $email = $row['email'];
        $autoid = $row['autoid'];
        
        echo "
       
            <div class='listings'>
                <div id='wrapper'>
                    <div id='mid'>
                        <h3>"; echo $firstname; echo " (";echo $marks; echo " pts)</h3>
                    </div>
                </div>
                <div id='left'>
                    <h1>"?><?php echo $row['subject'];?> </h1>
                    <div onclick="javascript:window.location.href='http://<?php echo $root;?>/resources/library/dropmarkpost.php?autoid=<?php echo $autoid; ?>'; return false;" style='cursor: pointer;' id='box2'></div> <?php echo"
                </div>
                <div id='right'>
                    <h3><a style='color:white;' href='moreinfo.php?cid=";echo $row['createid']; echo"'>";?><?php echo $email;?><?php echo "</a></h3>
                </div>
            </div>
            ";
        }
    $sqlemail = 'SELECT * FROM marks WHERE id = :id ORDER BY createid ASC';
    $stmtemail = $conn->prepare($sql);
    $stmtemail->bindParam(":id",$id,PDO::PARAM_INT);
    $stmtemail->execute();
    if ($stmt->rowCount() > 0)
        {
        echo "
        <div class='small'>
            <div id='pad'>
                ";
        while($row2=$stmtemail->fetch())
            {    
            echo "<center><h3>"; echo $row2['email']; echo "</h3></center>";
            }
        echo "
            </div>
        </div>";
        }
    }
    
    

?>