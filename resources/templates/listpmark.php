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
           
             <div style='height:100px;' id='info'>
                <div id='intro'>
                    <h6>Clicking the <div id='box2'>&nbsp;</div> will remove your listings or a students request for you.</h6>
                    <h6>Pressing the <span class='edit'>Edit</span> text will bring you to a page where you can edit the selected listing.</h6>
                </div>
            </div>
            <div id='halfbar' ><h1>Student Requests</h1></div>
           ";
        }
        else
        {
            echo "
           
             <div style='height:100px;' id='info'>
                <div id='intro'>
                    <h6>Clicking the <div id='box2'>&nbsp;</div> will remove your listings or a students request for you.</h6>
                    <h6>Pressing the <span class='edit'>Edit</span> text will bring you to a page where you can edit the selected listing.</h6>
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
            <div id='marklist'>
                <div id='marklistings'>
                    <div id='marklistleft'>
                        <h1>"; ?><?php echo $subject;?><?php echo "</h1>
                        <h3>by "; ?> <?php echo $firstname;?><?php echo " (";echo $marks;echo " pts)</h3>                                  
                    </div>
                    <div id='marklistright'>
                        <h4>"; ?><?php echo $email;?><?php echo "</h4>
                    </div>
                </div>
                <a style='display:inline-block' href='resources/library/dropmarkpost.php?autoid=";?><?php echo $autoid; echo "'?><div id='box'><h1></h1></div></a>
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
        <div style='text-align:center;' id='marklist'>
            <div id='marklistings'>
                ";
        while($row2=$stmtemail->fetch())
            {    
            echo "<span class='email'>"; echo $row2['email']; echo "</span>";
            }
        echo "
            </div>
        </div>";
        }
    }
    
    

?>