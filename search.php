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
    <title><?php echo $webname;?> - Listings</title>
    <meta name="description" content="listings of any skill trade or lesson. ">
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

<div id='top'>
<div class='main'>
	  <div id='header'>   
        </div> 
            <?php require_once ("resources/templates/logo.php"); ?>
            <?php require_once ('resources/templates/navbar.php'); ?>
            <?php require_once ('resources/templates/quote.php');
	    if(isset($_GET['pageid']))
                {
                $pageid=$_GET['pageid'];
                if($pageid=="1")
                    {
                    echo "
                        <div id='info'  style='height:50px;'>
                            <div id='intro'>
                                <h2 style='padding-top:5px;'>Your search returned no results, please try again.</h2>
                            </div>
                        </div>
			"  ;
                    }
                }
	    ?>
	    
	    <?php require_once ('resources/templates/searchquery.php'); ?>
		    
        </div>
<?php require_once ("resources/templates/footer.php"); ?>
</div>
</body>
</html>
