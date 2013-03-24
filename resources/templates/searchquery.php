<?php 
if(isset($_POST['submit']))
{  
    $name="%{$_POST['name']}%"; 
    $sql="SELECT  id, firstname, subject, information, payment FROM listings WHERE subject LIKE :subject OR firstname LIKE :name";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
	':subject' => $name,
	':name' => $name));
    if ( $stmt->rowCount() > 0)
    {
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	    $firstname =$row['firstname']; 
	    $subject=$row['subject'];
	    $information=$row['information'];
	    $payment=$row['payment'];
	    $id=$row['id']; 
	    //-display the result of the array 
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
    }
    else
    {
	header("location:$root/search.php?pageid=1");
    }
}


	?> 