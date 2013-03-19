<?php
if(isset($_SESSION['id']))
    {
    $id = $_SESSION['id'];
    $sql = 'SELECT * FROM marks WHERE id= %d ORDER BY createid ASC';
    $sql = sprintf($sql , $id);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll();
    if ($result!==false)
        {
        echo " <div id='halfbar' ><h1>Student Requests</h1></div>";
        }
            while($row = $stmt->fetch())
                    {
                            $firstname = $row['firstname'];
                            $subject = $row['subject'];
                            $email = $row['email'];
                            $autoid = $row['autoid'];
                            //echo $row['subject'];
                            echo "
                            <div id='marklist'>
                                <!--<div id='minibar'><h3>Listings</h3></div>-->
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
                            </div>";
                        }
        }
    

?>