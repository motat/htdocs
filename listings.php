<?php session_start();
;?>
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
    <title><?php echo $webname;?> - Listings</title>
    <meta name="description" content="listings of any skill trade or lesson. ">
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
<div class='container'>
    <?php require_once ("resources/templates/logo.php"); ?>
    <?php require_once ('resources/templates/navbar.php'); ?>
    <?php require_once ("resources/templates/quote.php"); ?>
    <?php
    if(isset($_GET['pageid']))
        {
        if($_GET['pageid']=="1")
            {
            echo "
                <div class='small'>
                    <div class='pad'>
                        <h2>Lesson requested.</h2>
                    </div>
                </div>";
            }
        }
    if(isset($_GET['pageid']))
        {
        if($_GET['pageid']=="2")
            {
            echo "
                <div class='small'>'
                    <div class='pad'>
                        <h2>You have already requested that class.</h2> 
                    </div>
                </div>";
            }
        }            
    ?>
    <div class='smallplus'>
        <div class='pad'>
            <h3>Clicking the <div id='box'>&nbsp;</div> will notify the professor that you request his lesson.</h3>
            <h3>For more information on the lesson, click on the <span class='h6'>information box</span>.</h3>
            <br/>
            <a href='add.php'><span class='add'>+Add a new lesson here.</span></a>
        </div>
    </div>
    <div id='search'>
        <h6>Lesson or Name: </h6>
        <form  method='post' action='/search.php?go'  id='searchform'>  <input  type='text' name='name'> <input  type='submit' name='submit' value='Search'>
        </form>
    </div>
    <?php require_once ('resources/templates/list.php'); ?>          
    <?php require_once ('resources/templates/pagination.php'); ?>
</div>
    <?php require_once ('resources/templates/footer.php'); ?>   
</body>
</html>
