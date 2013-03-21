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
        <?php require_once ("resources/templates/logo.php"); ?>
        <?php require_once ('resources/templates/navbar.php'); ?>
        <?php require_once ("resources/templates/quote.php"); ?>  
        <?php
        echo"
	
	<div style='padding-top:30px' id='add'>
            <div id='intro'>
		<form action='resources/library/editlist.php?createid=";echo $row['createid']; echo "' method='POST'>  
                    <label for='subject'>Subject<input value='";?><?php echo $row['subject']; echo"' style='left:17em;' type='text' name='subject'/></label>
                    <label for='information'>Information<textarea name='information' id='information' cols='40' rows='4'>";?><?php echo $row['information']; echo"</textarea>
                    <label style='margin-top:54px;' for='payment'>Check if payment is required<input style='left:17em;' type='checkbox' name='payment' value='yes'> </label>
                    <label for='county'>County
			<select name='county'>
			    <option value='oc'>Orange County</option>
			</select>
                    </label>
                    
                        <input style='margin-top:14px; float:left;' type='submit' value='Edit Listing'/>
                </form>
	    </div>
	</div>
		    ";
    }
    ?>

    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
