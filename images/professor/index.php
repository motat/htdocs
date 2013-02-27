<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><!-- Insert your title here --></title>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
        
    </style>
        
</head>
<body>
    <?php require_once("config.php"); ?> 
    <div id="top">
        <div class="main">
            <div id="header">
                
            </div>
            <div style="clear:both"></div>  
           <a href="#"><div id="menu">
                     
                          
            </div></a> 
             <ul id="header">
               <li><a href="http://localhost/professor">Professor</a></li>
                <li><a href="http://localhost/student">Student</a></li>
                <li><a href="http://localhost/login">Login</a></li>
                <li><a href="http://localhost/register">Register</a></li>
            </ul>
            <div id="content">
                <div id="quote">
                     <h1>&quot;Information is not knowledge.&quot;</h1>
                <h2>-Albert Einstein</h2>
                </div>
            </div>
            <div id="info">
               <!--What a logged in professor sees-->
                <?php

                    session_start();
                    if(isset($_SESSION['email']))
                    {
                    ?>
                <div id="profile">
                    <h1><?php echo " {$_SESSION['email']}, Debug this.";  ?></h1>
                        <?php
                    }
                    else
                    {
                    ?>
                     <h1>Please Visit <a href="http://localhost/login">The Login Page</a></h1>
              <?php
                    }
                    ?>
                </div>
                <!--What a logged out professor sees-->
             

            </div>
           <div id="footer">
            <div id="contact">
                <h1>Contact Vadim <a style="color:#160000;" href="#">Here</a>!</h1>
            </div>
            <div id="copyright">
                <h1>Copyright Vadim Pishchenko 2013</h1>
            </div>
           </div>
        </div>
    </div>
   
</body>
</html>