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
    <div class='min'>
        <div id='holder'>
            <div class='left'>
                <h2>all listings</h2>
                <span class='sub'>computer development</span> - <span class='dim'>vadim pishchenko</span>
                <span class='sub'>basics to css design</span> - <span class='dim'>vadim pishchenko</span>
            </div>
            <div class='right'>
                <h2>your listings</h2>
                <span class='sub'>computer development</span> - <span class='dim'>vadim pishchenko</span> 
                <span class='sub'>basics to css design</span> - <span class='dim'>vadim pishchenko</span>
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
    </div>   
</div>
</body>
</html>
