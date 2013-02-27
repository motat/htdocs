<?php  echo "<a href='?page=".$first_page."'><<</a> ";
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
                                echo "<a href='?page=".$previous."'><</a> ";
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
                                echo "<a href='?page=".$next."'>></a> ";
                            }
                            else
                            {
                                $next = $page+1;
                                echo "<a href='?page=".$next."'>></a> ";
                            }
                        }
                    echo "<a href='?page=".$last_page."'>>></a>";
                        ?>