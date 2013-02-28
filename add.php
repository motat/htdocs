<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha Registration Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
       
        
    </style>
             
</head>
<body>
 
    <div id="top">
        <div class="main">
            <div id="header">
                
            </div>
            <div style="clear:both"></div>  
           <a href="#"><div style=background:url('images/menu.png'); height=124px; id="menu">
                     
                          
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
            <div id="info">
                <div id="minibar"><h3>Listings</h3></div>
                <div id="intro">
               
                   
                    <form action="resources/library/addlist.php" method="POST">
                       
                    <label for=”subject”>Subject<input type="text" name="subject"/></label>
                    <label for=”information”>Information<input type="text" name="information"/></label>
                    <label for=”payment”>Payment (if none, leave blank)<input type="text" name="payment"/></label>
                        <input type="submit" value="Create Listing"/>
                    </form>
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
