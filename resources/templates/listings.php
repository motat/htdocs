 <?php
 
                if(isset($_GET['page'])) { 
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $sql = "SELECT * FROM listings";
            $query = mysql_query($sql);
            $num = mysql_num_rows($query);
            $per_page = "5";
            $last_page = ceil($num/$per_page);
            $first_page = "1";
                    
                    $start = ($page-1)*$per_page;
                    $limit = "LIMIT $start, $per_page";
                    $sql = "SELECT * FROM listings ORDER BY createid DESC $limit";
                    $query = mysql_query($sql);
                
                    while($row = mysql_fetch_array($query))
                        {
                            //echo $row['subject'];
                            echo "
                            <div id='list'>
                                <div id='listings'>
                                    <div id='listleft'>
                                        <h1>"?><?php echo $row['subject'];?><?php echo "</h1>
                                        <h3>payment: "?><?php echo $row['payment'];?><?php echo "</h3>
                                         <span class='h2'>by</span><span class='h5'>Professor "?><?php echo $row['firstname']; echo $row['createid'];?><?php echo "</span>
                                         
                                         <a href='resources/library/postmark.php?createid="?><?php echo $row['createid'];?><?php echo "'>Mark</a>
                                    </div>
                                <div id='listright'>
                                        <h4>"?><?php echo $row['information'];?><?php echo "</h4>
                                </div>
                                </div>
                                
                            </div>";
                        }
                       ?>