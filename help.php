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
     <?php require_once ("resources/templates/navbar.php"); ?>  
     <?php require_once ("resources/templates/quote.php"); ?>
     <div class='noheight'>
          <div class='darkback'>
               <div id='halfleft'>
                    <h1>the Win Win</h1>
               </div>
               <div id='halfright'>
                    <div class='pad'>
                         <h2>If you are looking to gain more students, <high>consider this</high>; offering a short and <high>free</high> course lets the student 'test the waters' and be more comfortable about <high>investing in a higher level lesson</high> of yours. Also, students who take a free course such as this, can decide not to continue with the subject, <high>without wasting any money</high>.</h2>
                    </div>
               </div>
          </div>
     </div>
     <div class='noheight'>
          <div class='darkback'>
               <div id='halfleft'>
                    <h1>your Rules</h1>
               </div>      
               <div id='halfright'>
                    <div class='pad'>
                         <h2>No parameters over your lesson are set by the website. You are in <high>total control</high> of the length of your lesson, the payment required (if any), <high>difficulty</high>, and material of the lesson.</h2>
                    </div>
               </div>
          </div>
     </div>
     <div class='noheight'>
          <div class='darkback'>
               <div id='halfleft'>
                    <h1>from Home</h1>
               </div>
               <div id='halfright'>
                    <div class='pad'>
                         <h2>Interested in <high>teaching from home?</high> That's easy! Using a program such as skype requires <high>only</high> an average internet connection, and a webcam. You can then <high>bring you student into your living room</high> and proceed with your lesson as you like.</h2>
                    </div>
               </div>
          </div>
     </div>
     <div class='noheight'>
          <div class='darkback'>
               <div id='halfleft'>
                    <h1>Privacy</h1>
               </div>
               <div id='halfright'>
                    <div class='pad'>
                         <h2>Privacy is very important to us, your emails are used by the website <high>only for verification</high>. Professors can <high>only view a students email</high> when he is <high>requested</high>. The student can <high>never</high> view the email of a professor <high>until</high> the professor contacts the student.</h2>
                    </div>     
               </div>
          </div>
     </div>
</div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
