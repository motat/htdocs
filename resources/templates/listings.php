
 <?php

    if(isset($_GET['page']))
       { 
       $page = $_GET['page'];
       }
    else
       {
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
    if (isset($_GET['county']) && $_GET['county'] != '')
    {
           $county=$_GET['county'];
           $sql = mysql_query("SELECT * FROM listings WHERE county='$county' ORDER BY createid DESC $limit");
   }  else {
           $sql = mysql_query("SELECT * FROM listings ORDER BY createid DESC $limit");
   }
   
   while($row = mysql_fetch_array($sql))
       {
       echo "
       <div id='list'>
           <div id='listings'>
               <div id='listleft'>
                   <h1>"?><?php echo $row['subject'];?><?php echo "</h1>
                   <span class='h2'>by</span><span class='h5'>Professor ";?><?php echo $row['firstname'];?><?php echo "</span>                                  
               </div>
               <div id='listright'>
                   <h4><a style='color:white;' href='moreinfo.php?cid=";echo $row['createid']; echo"'>";?><?php echo $row['information'];?><?php echo "</a></h4>
               </div>
           </div>
   <a style='display:inline-block' href='resources/library/postmark.php?createid="; ?><?php echo $row['createid'];?><?php echo "&subject="; echo $row['subject'];?><?php echo "&uid="; echo $row['id'];?><?php echo "&prof="; echo $row['firstname'];?><?php echo "&information="; echo $row['information'];?><?php echo "&county="; echo $_GET['county']?><?php echo "&markid="; echo $_SESSION['id'];?><?php echo "'><div id='box'></div></a>
       </div>
               ";
       }
    

   ?>