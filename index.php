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
        
        $(".box2").click(function(){
     window.location=$(this).find("a").attr("href"); 
     return false;
});
        </script>
</head>
<body>
<?php
/*if(isset($_SESSION['id']))
    {
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
}*/
?>
<div class='container'> 

    <!--if(isset($_GET['pageid']))
        {
        if($_GET['pageid']=="1")
            {
            echo "
                <div id='pageid'> 
                    <h1>You have been logged out!</h1> 
                </div>";
            }
        if($_GET['pageid']=="2")
            {
                echo "
                    <div id='pageid'> 
                        <h1>You have logged in! Check out or submit a post at the <a href='selectcount.php'>listings page</a></h1> 
                    </div>";
            }
        }     
    -->
    <div class='logo'>
    </div>
    <?php require_once ("resources/templates/navbar.php"); ?>
    <?php require_once ("resources/templates/quote.php"); ?>
    <div class='small'>
        <div class='pad'>
            <h3>Currently, our service is focused on and supported towards The Southern California area.</h3>
        </div>
    </div>
    <div class='huge'>
        </br>
        <h1><l1><strong>Greetings,</strong></l1></h1>
        </br>
        </br>
        <div id='inlarge'>
            <h2><white>Ahh Yes is a tool designed for any person to teach students any skill or lesson.</white></h2>
            <br/>
            <h2><white>Here are some examples of what you can do with Ahh Yes:</white></h2>
            <br/>
            <center><li><h3>teach a student how to bake a cake via webcam right in your kitchen</h3></li></center>
            <center><li><h3>learn how to blow a glass vase</li></h3></center>
            <center><li><h3>teach as a hobby, rather then a career</li></h3></center>
            <center><li><h3>introduce yourself to a topic before making life changing career choices</li></h3></center>
            <center><li><h3>learn how to take apart a computer</li></h3></center>
            <center><li><h3>learn how to prepare a efficient irrigation system for your garden</li></h3></center>
            <center><li><h3>learn how to take apart a computer</li></h3></center>
            <center><li><h3>find out how to change your cars break pads</li></h3></center>
            <center><li><h3>learn how to take apart a computer</li></h3></center>
            <br/>
            <br/>
            <center><h2>There is no limit on the amount of things you can learn, other then your dedication and will to LEARN.</h2></center>
        </div>
    </div>
</div>
    <?php require_once ('resources/templates/footer.php'); ?>
</body>
</html>
