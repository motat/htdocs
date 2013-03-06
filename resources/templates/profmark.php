<?php
    
    $sql = "SELECT * FROM marks WHERE id= '" . $_SESSION['id'] . "' ORDER BY createid ASC";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query))
                    {
                            $firstname = $row['firstname'];
                            $subject = $row['subject'];
                            $email = $row['email'];
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
	<a style='display:inline-block' href='resources/library/dropmarkpost.php?firstname=";?><?php echo $firstname;?><?php echo "&subject="; echo $subject;?><?php echo "&email="; echo $email; echo "'?><div id='box'><h1></h1></div></a>
                            </div>";
                        }
?>