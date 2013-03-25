<?php
session_start();
include 'resources/config.php';
if(isset($_SESSION['id']))
    {
    $sid=$_SESSION['id'];
    $sql='SELECT * FROM accounts WHERE id=:id';
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':id' => $sid));
    $checkrow=$stmt->fetch();
    $newid=$checkrow['new'];
    if($newid == 1)
        {
            $sql='UPDATE accounts SET new=:new WHERE id=:sid';
            $stmt=$conn->prepare($sql);
            $stmt->execute(array(
                ':new' => '0',
                ':sid' => $sid ));      
        }
    }
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <link rel="icon" 
      type="image/png" 
      href="images/myicon.png">        
    <title><?php echo $webname;?> - Professor Panel</title>
    <meta name="description" content="professor panel to manage any listings or requests for any class or lesson you have">
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
    <div class='logo'>
    </div>
    <?php require_once ("resources/templates/logo.php"); ?>
    <?php require_once ('resources/templates/navbar.php'); ?>
    <?php require_once ('resources/templates/quote.php'); ?>
    <?php
    if(!isset($_SESSION['id']))
        {
    ?>
    <div class="medium">
        <div class='pad'>
            <h1>Professor,  </h1>
            <br/>
            <h2><l1>This is the professor panel, you need to be logged in.</l1></h2>
            <br/>
            <h2><a href="<?php echo $root;?>/login.php">Login here.</a></h2>
            
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
    <?php require_once ('resources/templates/listpmark.php');  ?>
    <?php require_once ('resources/templates/listprof.php');
        }
    ?>
</div>
    <?php require_once ('resources/templates/footer.php'); ?>   
</body>
</html>