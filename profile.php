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
<?php
$uid=$_SESSION['id'];
$sql='SELECT * FROM accounts WHERE id=:uid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':uid' => $uid ));
$row=$stmt->fetch();
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$marks=$row['marks'];
?>
<div class='container'>
    <?php require_once ("resources/templates/logo.php"); ?>
    <?php require_once ("resources/templates/navbar.php"); ?>  
    <?php require_once ("resources/templates/quote.php"); ?>
    <?php 
    if(isset($_SESSION['id']))
        {
        echo"
            <div class='noheight'>
                <div class='darkback'>
                    <div id='halfleft'>
                        <h2>"; echo $firstname; echo " "; echo $lastname; echo"</h2>
                    </div>
                    <div id='halfright'>
                        <div class='pad'>
                            <h2>"; echo $email; echo"</h2>
                            <h2>You have "; echo $marks; echo" points.</h2>
                            <form action='resources/library/editemail.php' method='POST'>  
                                <input type='text' name='email'/>
                                <input style='margin-top:14px;' type='submit' value='Change Email'/>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>";
        }
    else
        {
            echo"
                <div class='medium'>
                    <h3>Hello, </h3>
                    <h2 style='padding-top:20px;'>To access the user account panel, please log in!</h2>
                </div>
                    ";
        }
    ?>
</div>
<?php require_once ('resources/templates/footer.php'); ?>
</body>
</html>
