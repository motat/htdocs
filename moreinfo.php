<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?> - More Info</title>
    <meta name="description" content="more information on a listing. subject and class ">
    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="jquery.google_menu.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>
</head>
<body>
<?php
$cid=$_GET['cid'];
//$sql = mysql_query("SELECT * FROM listings WHERE createid='$cid'");
$sql='SELECT * FROM listings WHERE createid=:cid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':cid' => $cid ));
while($row = $stmt->fetch())
    {
?>
<div id="top">
    <div class="main">
        <div id="header">
        </div>
        <a href="#">
            <div style=background:url('images/menu.png'); height=124px; id="headerimage">     
            </div>
        </a> 
        <?php require_once ('resources/templates/navbar.php'); ?>
        <?php require_once ("resources/templates/quote.php"); ?>  
        <?php
        echo "<div id='moreinfo'>
        <h1>"?><?php echo $row['subject']; echo "</h1>
        <h2>Professor "; echo $row['firstname']; echo "</h2>
        <div id='moreinfobox'><h3>"; echo $row['information']; echo "</h3></div>
        </div>" ;
    }
    ?>

    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
