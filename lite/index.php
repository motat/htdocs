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
    <?php require_once('resources/library/sidebar.php'); ?>
    <div class='block'></div>
    <?php require_once('more.php'); ?>
    <div class='min'>
        <div id='holder'>
            <div class='left'>
                <?php require_once('resources/library/alist.php'); ?>
            </div>
            <div class='right'>
                <?php require_once('resources/library/ylist.php'); ?>
            </div>
            <div style='clear:both;'></div>
        </div>
        <div id='holder'>
            <div class='left'>
                <h2>student requests</h2>
                <span class='sub'>basics to css design</span> - <span class='dim'>john jones</span>
            </div>
            <div class='right'>
                <h2>student requests</h2>
                <span class='sub'>basics to css design</span> - <span class='dim'>john jones</span>
            </div>
            <div style='clear:both;'></div>
        </div>
        <div id='holder'>
                <h3><span class='plus'> + </span> add </h3>
                <h3><span class='edit'> e </span> edit </h3>
                <h3><span class='more'> > </span> more </h3> 
                <h3><span class='minus'> - </span> remove </h3> 
        </div>              
    </div>   
</div>
</body>
</html>
