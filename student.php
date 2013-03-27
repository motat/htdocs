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
    <title><?php echo $webname;?> - Student Panel</title>
    <meta name="description" content="student panel to see which classes you wish to take and to manage those classes">
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
    <?php require_once ('resources/templates/quote.php'); ?>
    <?php
        if(!isset($_SESSION['id']))
        {
            if(isset($_GET['pageid']))
            {
                if($_GET['pageid']=="1")
                {
                    echo "
                        <div class='small'>
                            <div class='pad'>
                                <h1>Thank you for taking the time to rate your professor! This really helps.</h1> 
                            </div>
                        </div>";
                }
            }     
    ?>
    <div class="smallplus">
        <div class='pad'>
            <h3>Hello,</h3>
            <h3>This is the student panel, you need to be logged in to view it. <a href="<?php echo $root;?>/login.php"><br/><font color="#411716">Login here.</font></a></h3>
        </div>
    </div>
    <?php
        }
        if(isset($_SESSION['id']))
        {
            $id = $_SESSION['id'];
            $query = 'SELECT * FROM accounts WHERE id= %d';
            $query = sprintf($query, $id);
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $row = $stmt->fetch();
    ?>
    <div class="smallplus">
        <div class='pad'>
            <h3><?php echo $row['firstname'];?>, </h3>
            <h3>Below you can see a list of all the lessons you have requested. If not already, a professor should contact you via email soon.</h3>
        </div>
   </div>
    <?php require_once ('resources/templates/listrecent.php');  ?>
    <?php require_once ('resources/templates/liststud.php');  ?>
    <?php
         } 
    ?>
</div>
    <?php require_once ('resources/templates/footer.php'); ?>    
</body>
</html>