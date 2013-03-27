<?php
$county=$_GET['county'];
echo "<div class='noheight'>
            <h1>
                <a href='?county=".$county."&page=".$first_page."'><<</a> ";
                    if($page == $first_page)
                        {
                            echo "< ";
                        }
                    else
                        {
                            if(!isset($page))
                            {
                                echo "< ";
                            }
                            else
                            {
                                $previous = $page-1;
                                echo "<a href='?county=".$county."&page=".$previous."'><</a> ";
                            }
                        }
                    if($page == $last_page)
                        {
                            echo "> ";   
                        }
                    else
                        {
                            if(!isset($page))
                            {
                                $next = $first_page+1;
                                echo "<a href='?county=".$county."&page=".$next."'>></a> ";
                            }
                            else
                            {
                                $next = $page+1;
                                echo "<a href='?county=".$county."&page=".$next."'>></a> ";
                            }
                        }
           echo "<a href='?county=".$county."&page=".$last_page."'>>></a>";
      echo "</h1>

    </div>";
                        ?>
                        
                        