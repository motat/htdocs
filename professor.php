<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Professor Panel</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include 'resources/config.php';
session_start();
?>
<div id="top">
    <div class="main">
        <div id="header">    
        </div>
            <a href="http://localhost">
                <div style=background:url('images/menu.png'); height=124px; id="menu">        
                </div>
            </a> 
            <?php require_once ('resources/templates/navbar.php'); ?>
            <?php require_once ('resources/templates/quote.php'); ?>
            <?php
               if(!isset($_SESSION['id']))
                    {
            ?>
            <div id="info">
                <div id="minibar">
                    <h3>Professor Panel</h3>
                </div>
                <div id="intro">
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
            <div id="info">
                <div id="minibar">
                    <h3>Professor Panel</h3>
                </div>
                <div id='intro'>
                    <h1>Hello Professor <?php echo $row['firstname']."  ". $row['lastname'];?></h1>
                    <h2>On this panel, you can see which listings you have put up. You are also able to manage them. If you would like to add a listing, please browse to the  <a href="http://localhost/addlist/"><font color="#411716">listings page.</font></a></h2>
                </div>
            </div>
            <?php
                 require_once ('resources/templates/yourlist.php');
               }
               ?>
            <?php require_once ('resources/templates/pagination.php'); ?>
            <?php require_once ('resources/templates/footer.php'); ?>
        </div>
    </div>
    
   
</body>
</html>