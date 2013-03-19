<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?> - Professor Panel</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
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
                    <h1>Hello Professor  </h1>
                    <h2>This is the professor panel, you need to be logged in. <a href="http://localhost/login.php"><font color="#411716">Login here.</font></a></h2>
                </div>
            </div>
            <?php
                    }
                if(isset($_SESSION['id']))
                {
                    $id = $_SESSION['id'];
                    $query = 'SELECT * FROM accounts WHERE id= %d';
                    $query = sprintf($query, $id);
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $row = $stmt->fetch();
            ?>
            <div id="info" >
                    <h3>Professor <?php echo $row['firstname']; ?>,</h3>
                <div id='intro'>
                    <h2>Here you can see which students desire you and also which listings you've put up. Clicking the <div id='box2'>&nbsp;</div> will remove your listings or a students request for you. </h2>
                </div>
            </div>
   
            
            <?php require_once ('resources/templates/profmark.php');  ?>
            <?php require_once ('resources/templates/yourlist.php');  ?>
    
            <?php } ?>
          
        </div>
    </div>
    
</body>
</html>