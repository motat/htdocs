<?php session_start();?>
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Lite V</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src='script/showDiv.js'></script>
</head>
<body>
<div class='container'>
    <?php require_once('resources/templates/header.php'); ?>
    <?php require_once('resources/library/sidebar.php'); ?>
    <div class='block'></div>
    <?php require_once('more.php'); ?>
    <div class='min'>
        <div id='holder'>
               <h1>win win</h1>
               <br/>
               <h2>offering a short and free beginner lesson has benefits for both the student and the instructor</h2>
               <br/>
            <div id='lredset'>
               <li>students don't have to worry if there investment will be worth it</li>
               <li>more students will consider taking your more advanced premium lessons</li>
               <li>a small tester class makes students more comfortable with actually taking a class</li>
            </div>
        </div>
        <div id='holder'>
               <h1>your rules</h1>
               <br/>
               <h2>you have complete control over your lesson, here are some examples</h2>
               <br/>
            <div id='lredset'>
               <li>you decide how long your lesson is</li>
               <li>you decide if you require compensation for your lesson</li>
               <li>you decide the amount of students you teach</li>
            </div>
        </div>
        <div id='holder'>
               <h1>teach from home</h1>
               <br/>
               <h2>the internet offers a wide variety of tools for you to use if you wish to teach from home</h2>
               <br/>
            <div id='lredset'>
               <li>using skype to chat with text or over webcam is a fast, safe, and efficient way to communicate</li>
               <li>a quick google search will help you find many other helpful tools</li>
            </div>
        </div>
    </div>       
</div>
<div style='clear:both;'></div>
<div class='mainfooter'>
	<div id='mainlink'>
		<h2><a href='#'><span class='nav'>help</span><a/> {} <a href='#'><span class='nav'>tos : <?php if(isset($_SESSION['uid'])) { echo $_SESSION['uid']; } ?></span><a/></h2>
	</div>
	<div style='clear:both;'></div>
</div>
</div>
</body>
</html>
