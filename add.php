<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'resources/config.php';
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $webname;?> - Add Listing</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />      
</head>
<body>
<div id="top">
    <div class="main">
        <div id="header">
        </div>
        <a href="#">
            <div style=background:url('images/menu.png'); height=124px; id="menu">          
            </div>
        </a> 
        <?php require_once ('resources/templates/navbar.php'); ?>
        <?php require_once ("resources/templates/quote.php"); ?>  
        <div id="add">
            <div id="minibar">
                <h3>Listings</h3>
            </div>
            <div id="intro">
			<br/>
			<br/>
			<br/>
                <form action="resources/library/addlist.php" method="POST">  
                    <label for=”subject”>Subject<input style='left:17em;' type="text" name="subject"/></label>
                    <label for=”information”>Information<textarea name="information" id="information" cols="40" rows="4"></textarea>
                    <label style='margin-top:54px;' for=”payment”>Check if payment is required<input style='left:17em;' type="checkbox" name="payment" value="yes"> </label>
                    <label for=”county”>County
                    <select name="county">
                    <option value="oc">Orange County</option>
                    </select>
                    </label>
                    
                        <input style='margin-top:14px; float:left;' type="submit" value="Create Listing"/>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
