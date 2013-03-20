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
        echo " <div id='halfbar' ><h1>Student Requests</h1></div>";
        }
    while($row = $stmt->fetch())
        {
        $firstname = $row['firstname'];
        $subject = $row['subject'];
        $email = $row['email'];
        $autoid = $row['autoid'];
        echo "
            <div id='marklist'>
                <div id='marklistings'>
                    <div id='marklistleft'>
                        <h1>"; ?> <?php echo $firstname;?><?php echo "</h1>
                        <h3>"; ?><?php echo $subject;?><?php echo "</h3>                                  
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
        <div style='text-align:center' id='marklist'>
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