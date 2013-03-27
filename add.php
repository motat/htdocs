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
    <title><?php echo $webname;?> - Add Listing</title>
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
    <div class='small'>
        <div class='pad'>
            <h2>Before you post a course, check out the <a href='help.php'>help and tips</a> page for some general knowledge on listings.</h1>
        </div>
    </div>
    <form action="resources/library/addlist.php" method="POST">  
        <div class='extralarge'>
            <div class='noheight'>
                <div id='largeleft'>
                    <h3>Subject (short)</h3>
                </div>
                <div id='largeright'>
                    <input maxlength='20' style='left:17em;' type="text" name="subject"/>
                </div>
            </div>
            <div class='noheight'>
                <div id='largeleft'>
                    <h3>Information</h3>
                </div>
                <div id='largeright'>
                    <textarea name="informtaion" id="information" cols="40" rows="4"></textarea>
                </div>
            <div class='noheight'>
                <div id='largeleft'>
                    <h3>Check if payment is required</h3>
                </div>
                <div id='largeright'>
                    <input style='left:17em;' type="checkbox" name="payment" value="yes"> </label>
                </div>
            </div>
            <div class='noheight'>
                <div id='largeleft'>
                    <h3>County</h3>
                </div>
                <div id='largeright'>
                    <select name='county'>
                        <option value='oc'>Orange County</option>
                    </select>
                </div>
            </div>
            <div class='noheight'>
                <div id='largeright'>
                    <input style='margin-top:14px; float:left;' type='submit' value='Edit Listing'/>
                </div>
            </div> 
        </div>
    </form>
</div>
    <?php require_once ('resources/templates/footer.php'); ?>
</body>
</html>
