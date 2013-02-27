<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <link href="css/listingsstyle.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
        
    </style>
        
</head>
<?php
include 'resources/config.php';
session_start();

?>
<body>
    
    <div id="top">
        <div class="main">
            <div id="header">
                
            </div>
            <div style="clear:both"></div>  
           <a href="http://localhost">
            <div style=background:url('images/menu.png'); height=124px; id="menu">
                     
                          
            </div></a> 
             <ul id="header">
               <li><a href="http://localhost/professor.php">Professor</a></li>
                <li><a href="http://localhost/student.php">Student</a></li>
                <li><a href="http://localhost/listings.php">Listings</a></li>
                <?php if(!isset($_SESSION['id'])) {?>  <li><a href="http://localhost/login.php">Login</a></li><?php }else{?> <li><a href="http://localhost/logout.php">Logout</a></li><?php }?>
            </ul>
            <div id="content">
                <div id="quote">
                     <h1>&quot;Information is not knowledge.&quot;</h1>
                <h2>-Albert Einstein</h2>
                </div>
            </div>
            <?php
               if(!isset($_SESSION['id']))
                    {
    
            ?>
          <div id="introduction">
                <div id="minibar"><h3>Professor Panel</h3></div>
                   <div id="profile">
                        <h1>Hello Professor </h1>
                        <h2>This is the professor panel, you need to be logged in. <a href="http://localhost/login.php"><font color="#411716">Login here.</font></a></h2>
                    </div>
            </div>
          <?php
                    }
                    ?>
            <?php
               if(isset($_SESSION['id']))
                    {
                        $query = "SELECT * FROM accounts WHERE id= '" . $_SESSION['id'] . "';";
                        $result = mysql_query($query) or die(mysql_error());
                        $row = mysql_fetch_array($result) or die(mysql_error());
            ?>
          <div id="introduction">
                <div id="minibar"><h3>Professor Panel</h3></div>
                   <div id="profile">
                        <h1>Hello Professor <?php echo $row['firstname']."  ". $row['lastname'];?></h1>
                        <h2>On this panel, you can see which listings you have put up. You are also able to manage them. If you would like to add a listing, please browse to the  <a href="http://localhost/addlist/"><font color="#411716">listings page.</font></a></h2>
                    </div>
          </div>
          
                 <?php
                 require_once ('resources/templates/yourlist.php');
               }
               ?>
               <div id='footer'>
            <div id='contact'>
              
            </div>
            <div id='copyright'>
                <h1><?php
                if(isset($_SESSION['id']))
                    {
                echo "<a href='?page=".$first_page."'><<</a> ";
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
                    }
                   
                        ?></h1>
                 
                 
            </div>
           </div>
           <div id="footer">
            <div id="contact">
                <!--<h1>Contact Vadim <a style="color:#160000;" href="#">Here</a>!</h1>-->
            </div>
            <div id="copyright">
                <h1>&#169; Vadim Pishchenko</h1>
            </div>
           </div>
        </div>
    </div>
    
   
</body>
</html>