<?php
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$id = $_SESSION['id'];
$email = $_POST['email'];
if(isset($_SESSION['id']))
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //Query to insert listings 
                $query='UPDATE accounts SET email=:email WHERE id=:id';
                $stmt= $conn->prepare($query);
                $stmt->execute(array(
                        ':email' => $email,
                        ':id' => $id ));
                header("location:$baseurl/profile.php");
            }
            else
            {
            header("location:$root/failed.php?success=wrongemail"); 
            }
    }
    else
    {
        header("localtion:$root/failed.php?success=loginreq");
    }
?>