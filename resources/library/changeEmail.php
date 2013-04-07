<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$email = $_POST['email'];
if(isset($_SESSION['uid']))
    {
    	$uid = $_SESSION['uid'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //Query to insert listings 
                $query='UPDATE accounts SET email=:email WHERE uid=:uid';
                $stmt=$conn->prepare($query);
                $stmt->execute(array(
                        ':email' => $email,
                        ':uid' => $uid ));
                header("location:$baseurl/index.php?success=changedemail");
            }
            else
            {
            header("location:$root/failed.php?success=inproperemail"); 
            }
    }
    else
    {
        header("localtion:$root/failed.php?success=notloggedwtfiswrongwithyouhackerfag");
    }
?>