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
if(isset($_SESSION['id']))
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
}
?>
<div id="top">
    <div class="main">
        <div id="header">
        </div>
            <?php require_once ("resources/templates/logo.php"); ?>
            <?php require_once ("resources/templates/navbar.php"); ?>  
            <?php require_once ("resources/templates/quote.php"); ?>
                        <div id='info' style='height:600px;'>
                                <h3>Greetings, </h3>
                            <div id='intro'>
                                <h2 style='padding-top:20px;'>Ahh Yes is a tool designed for any person to teach students any skill or lesson. </h2>
                                <h2 style='padding-bottom:20px;'>Here are some examples of what you can do with Ahh Yes:</h2>
                                <div id='exs'>
                                    <span class='white'>&bull; </spac><span class='exs'>teach a student how to bake a cake via webcam right in your kitchen</span>
                                    <br/>
                                    <br/>
                                    <span class='white'>&bull; </spac><span class='exs'>learn how to blow a glass vase</span>
                                    <br/>
                                    <br/>
                                    <span class='white'>&bull; </spac><span class='exs'>teach as a hobby, rather then a career</span>
                                    <br/>
                                    <br/>
                                    <span class='white'>&bull; </spac><span class='exs'>introduce yourself to a topic before making life changing career choices</span>
                                    <br/>
                                    <br/>
                                    <span class='white'>&bull; </spac><span class='exs'>learn how to take apart a computer</span>
                                    <br/>
                                    <br/>
                                    <span class='white'>&bull; </spac><span class='exs'>learn how to prepare a efficient irrigation system for your garden</span>
                                    <br/>
                                    <br/>
                                    <span class='white'>&bull; </spac><span class='exs'>find out how to change your cars break pads</span>
                                    <br/>
                                    <br/>
                                    <span class='learn'>There is no limit on the amount of things you can learn, other then your dedication and will to LEARN.</span>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                            
                        </div>
                        <div id='info2'>
                            <div id='intro2'>
                                <h2>Currently, our service is focused on and supported towards The Southern California area.</h2>
                            </div>
                        </div>
                    
                
        
         
        
    </div>
<?php require_once ('resources/templates/footer.php'); ?>
</div>
</body>
</html>
