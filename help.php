<?php session_start();?>
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
     <link rel="icon" 
      type="image/png" 
      href="images/myicon.png">
    <title><?php echo $webname;?></title>
    <meta name="description" content="connect with professor or tutor for any lesson. you can list any trade or skill you want to teach">
    <meta name="keywords" content="looking for class student any subject">
    <meta name="robots" content="index,follow">
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
<div id="top">
    <div class="main">
        <div id="header">
        </div>
            <?php require_once ("resources/templates/logo.php"); ?>
            <?php require_once ("resources/templates/navbar.php"); ?>  
            <?php require_once ("resources/templates/quote.php"); ?>
            <div id='tip'>
               <div id='tipleft'>
                    <div id='tipmini'>
                         <h1>the Win Win</h1>
                    </div>
               </div>
               <div id='tipright'>
                    <h2>If you are looking to gain more students, <span class='tip'>consider this</span>; offering a short and <span class='tip'>free</span> course lets the student 'test the waters' and be more comfortable about <span class='tip'>investing in a higher level lesson</span> of yours. Also, students who take a free course such as this, can decide not to continue with the subject, <span class='tip'>without wasting any money</span>.</h2>
               </div>
            </div>
            <div id='tip'>
               <div id='tipleft'>
                    <div id='tipmini'>
                         <h1>your Rules</h1>
                    </div>
               </div>
               
                    <div id='tipright'>
                         <h2>No parameters over your lesson are set by the website. You are in <span class='tip'>total control</span> of the length of your lesson, the payment required (if any), <span class='tip'>difficulty</span>, and material of the lesson.</h2>
                    </div>
            </div> 
        
    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
