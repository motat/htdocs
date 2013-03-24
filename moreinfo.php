<?php session_start(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="icon" 
      type="image/png" 
      href="images/myicon.png">
    <title><?php echo $webname;?> - More Info</title>
    <meta name="description" content="more information on a listing. subject and class ">
    <script type="text/javascript" src="script/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="script/jquery.google_menu.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
    </script>
</head>
<body>
<div id="top">
    <div class="main">
        <div id="header">
        </div>
        <?php require_once ("resources/templates/logo.php"); ?>
        <?php require_once ('resources/templates/navbar.php'); ?>
        <?php require_once ("resources/templates/quote.php"); ?>  
        <?php
        $cid=$_GET['cid'];
        //$sql = mysql_query("SELECT * FROM listings WHERE createid='$cid'");
        $sql='SELECT * FROM listings WHERE createid=:cid';
        $stmt=$conn->prepare($sql);
        $stmt->execute(array(
            ':cid' => $cid ));
        while($row = $stmt->fetch())
            {
            echo "
            <div id='tip'>
                <div id='tipleft'>
                    <div id='tipmini'>
                            <h1>"; echo $row['subject']; echo "</h1>
                            <h1 style='font-size:15px; padding-top:20px;'><a style='display:inline-block' href='resources/library/postmark.php?createid="; ?><?php echo $row['createid']; echo "&uid="; echo $row['id'];?><?php echo "'>(request class)</a>
    
                    </div>
                </div>
                <div id='tipright'>
                
                    <h2>"; echo $row['firstname']; echo "</h2>
                    <h2>"; echo $row['information']; echo "</h2>
                </div>
            </div>
            
            " ;
            }   
    ?>

    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
