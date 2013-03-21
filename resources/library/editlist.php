<?php
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$id = $_SESSION['id'];
$createid = $_GET['createid'];
        //Query to get firstname   
        $query1 = 'SELECT * FROM accounts WHERE id= %d';
        $query1 = sprintf($query1, $id);
        $stmt1 = $conn->prepare($query1);
        $stmt1->execute();
        $row = $stmt1->fetch();
        $firstname = $row['firstname'];
$subject = $_POST['subject'];
$information = $_POST['information'];
$county = $_POST['county'];
if(isset($_SESSION['id']))
    {
    if(isset($_POST['payment']))
        {
        $payment = $_POST['payment'];
        //Query to insert listings 
        $query='UPDATE listings SET id=:id, subject=:subject, information=:information, payment=:payment, firstname=:firstname, county=:county WHERE createid=:createid ';
        $stmt= $conn->prepare($query);
        $stmt->execute(array(
                ':id' => $id,
                ':subject' => $subject,
                ':information' => $information,
                ':payment' => $payment,
                ':firstname' => $firstname,
                ':county' => $county,
                ':createid' => $createid ));
        header("location:$baseurl/success.php?success=listings");
        }
    else
        { 
        $query='UPDATE listings SET id=:id, subject=:subject, information=:information, payment=:payment, firstname=:firstname, county=:county WHERE createid=:createid ';
        $stmt=$conn->prepare($query);
        $stmt->execute(array(
                ':id' => $id,
                ':subject' => $subject,
                ':information' => $information,
                ':payment' => 'no',
                ':firstname' => $firstname,
                ':county' => $county,
                ':createid' => $createid ));
        header("location:$baseurl/success.php?success=listings");
        }
    }
    else
    {
        Echo" login required";
    }
?>