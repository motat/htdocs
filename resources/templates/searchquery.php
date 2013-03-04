<?php 
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root",  "root") or die ('I cannot connect to the database  because: ' . mysql_error()); 
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
                                <!--<div id='minibar'><h3>Listings</h3></div>-->
                                <div id='listings'>
                                    <div id='listleft'>
                                        <h1> "; ?><?php echo $subject ;?><?php echo "</h1>
                                        <h3>payment: "; ?><?php echo $payment ; echo "</h3>
                                         <span class='h2'>by</span><span class='h5'>Professor "?><?php echo $firstname;?><?php echo "</span>
                                    </div>
                                <div id='listright'>
                                        <h4>"?><?php ;?><?php echo $information ; echo "</h4>
                                </div>
                                </div>
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