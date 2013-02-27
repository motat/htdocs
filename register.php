<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha Registration Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <style>
       
        
    </style>
             
</head>
<body>
 
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
                <li><a href="http://localhost/listings">Listings</a></li>
                  <li><a href="http://localhost/login">Login</a></li>
            </ul>
            <div id="content">
                <div id="quote">
                     <h1>&quot;Information is not knowledge.&quot;</h1>
                <h2>-Albert Einstein</h2>
                </div>
            </div>
            <div id="info">
                <div id="minibar"><h3>Registration</h3></div>
                <div id="intro">
               
                   
                    <form action="register.php" method="POST">
                       
                    <label for=”firstname”>Firstname<input type="text" name="firstname"/></label>
                    <label for=”lastname”>Lastname<input type="text" name="lastname"/></label>
                    <label for=”email”>Email<input type="text" name="email"/></label>
                    <label for=”password”>Password<input type="password" name="password"/></label>
                        <input type="submit" value"submit"/>
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
