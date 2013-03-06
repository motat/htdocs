<?php
    
    $sql = "SELECT * FROM marks WHERE markid= '" . $_SESSION['id'] . "' ORDER BY createid ASC";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query))
                    {
                            $firstname = $row['firstname'];
							$prof = $row['prof'];
							$information = $row['information'];
                            $subject = $row['subject'];
                            $email = $row['email'];
                            //echo $row['subject'];
                            echo "
                            <div id='marklist'>
								
                                <!--<div id='minibar'><h3>Listings</h3></div>-->
                                <div id='marklistings'>
                                    <div id='marklistleft'>
                                        <h1>Professor"; ?> <?php echo $prof;?><?php echo "</h1>
                                        <h3> "; ?><?php echo $subject;?><?php echo "</h3>                                  
                                        
                                        
                                    </div>
                                <div id='marklistright'>
                                        <h4>"; ?><?php echo $information;?><?php echo "</h4>
                                </div>
                                </div>
                            </div>";
                        }
?>