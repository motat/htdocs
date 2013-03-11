<?php 
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root") or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db("ahhha"); 
	  //-query  the database table 
	  $sql="SELECT  id, firstname, subject, information, payment FROM listings WHERE subject LIKE '%" . $name .  "%'OR firstname LIKE '%" . $name ."%'"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  //-create  while loop and loop through result set 

      
          while($row=mysql_fetch_array($result)){

	        $firstname =$row['firstname']; 
	        $subject=$row['subject'];
		$information=$row['information'];
		$payment=$row['payment'];
	        $id=$row['id']; 
	  //-display the result of the array 
	 ?>
            <?php echo " 
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
           " ?>
           <?php
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  }
          } 
	?> 